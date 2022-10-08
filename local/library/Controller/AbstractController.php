<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    07.10.2022
 * Time:    19:21
 */

namespace Library\Controller;

use Library\Tools\CookieSecret;
use Library\Tools\LogWriter;

class AbstractController
{
    //* Метод по умолчанию для режима работы
    public const DEFAUlT_METHOD = 'get';

    //* Действие по умолчанию для всех режимов работы
    public const DEFAUlT_ACTION = 'default';

    //* Название переменной по умолчанию в query содержащей название действие
    public const DEFAUlT_ACTION_NAME = 'action';

    //* HTTP ответ по умолчанию
    public const DEFAUlT_CODE = 200;

    /** @var array Массив дополнительных заголовков ответа в виде key => value */
    protected $headersAdditional = [];

    /** @var bool Флаг ответа. Только заголовки. */
    protected $isOnlyHeaders = false;

    /** @var string get|post */
    protected $method;

    /** @var string */
    protected $action = self::DEFAUlT_ACTION;

    /** @var string */
    protected $actionName = self::DEFAUlT_ACTION_NAME;

    /** @var string Метод, который будет вызван */
    protected $callable;

    /** @var array Массив ошибок добавленных автоматически или с помощью обработчиков ошибок */
    protected $errors = [];

    /** @var array Массив ответ который будет фактически сериализован и отправлен. Дополняется автоматически при завершении. */
    protected $response = [];

    /** @var mixed Результат. Присвоенный вручную или автоматически callable методом, при возвращении не null результата */
    protected $result = false;

    /** @var bool Автозапуск хендлера сразу после создания объекта класса */
    protected $autoRun = true;

    /** @var bool Флаг контроля. Хендлер был запущен к выполнению */
    protected $isRun = false;

    /** @var bool Флаг контроля. Хендлер успешно финишировал выполнение */
    protected $isFinish = false;

    /** @var int */
    protected $timeStarted  = 0;
    /** @var int */
    protected $timeFinished = 0;

    protected $code = self::DEFAUlT_CODE;

    /** @var array Массив переменных извлеченных из запроса в зависимости от типа и содержимого для отвязки от использования $_GET $_POST $_REQUEST */
    //TODO: Не обрабатывается никак массив $_FILES
    protected $query = [];

    /**
     * @var array Массив переменных полученных и обработанных из $query при вызове метода getData
     * @see AjaxHandler::getData()
     */
    protected $data = [];

    /** @var string Заголовок типа ответа по умолчанию */
    protected $headerContentType = 'application/json; charset=utf-8';

    /** @var int Флаги с которыми будет закодирован JSON ответ */
    protected $jsonFlags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK;

    /** @var bool Форматирует JSON в читабельный вид */
    protected $prettyPrint = false;

    public function __construct($autoRun = true)
    {
        $this->autoRun = $autoRun;

        while (ob_get_level()) {
            ob_end_clean();
        }

        register_shutdown_function([$this, 'onShutdown']);

        $this->method = $_SERVER["REQUEST_METHOD"] ?? self::DEFAUlT_METHOD;
        $this->method = strtolower($this->method);

        $this->query    = $this->getQuery();
        $this->setCallable();

        if ($this->autoRun) {
            $this->run();
        }
    }

    public function isPost(): bool
    {
        return ($this->method === 'post');
    }

    public function getQueryValue($name, $default = null): string
    {
        $result = $this->query[$name] ?? $default;
        return trim($result);
    }

    public function run(): void
    {
        $this->isRun       = true;
        $this->timeStarted = microtime(true);
        try {
            $result = $this->execute();
            if (!is_null($result)) {
                $this->result = $result;
            }
            $this->isFinish     = true;
            $this->timeFinished = microtime(true);
        } catch (\Throwable $exception) {
            $message = <<< TEXT
{$exception->getCode()} Exception in file {$exception->getFile()} in line {$exception->getLine()}: {$exception->getMessage()}
TEXT;
            LogWriter::warning($message);
        }
    }

    public function onShutdown(): void
    {
        $this->outHeaders();

        if (!$this->isOnlyHeaders) {
            $this->outResponse();
        } else {
            $this->outResponseDummy();
        }
        die();
    }

    protected function outHeaders(): void
    {
        $statusCodesText = static::getHttpStatusTexts();
        $statusCode      = $this->code;
        $statusText      = $statusCodesText[$this->code] ?? null;

        if (!$statusText) {
            $statusText = $statusCodesText[200];
            $statusCode = 200;
        }

        $statusString = $statusCode . ' ' . $statusText;

        header($_SERVER['SERVER_PROTOCOL'] . ' ' . $statusString, true, $statusCode);
        header('Content-type: ' . $this->headerContentType);

        foreach ($this->headersAdditional as $name => $value) {
            $header = $name . ': ' . $value;
            header($header);
        }
    }

    protected function execute()
    {
        CookieSecret::checkString();

        if (!method_exists($this, $this->callable)) {
            throw new \RuntimeException('Unknown method: ' . $this->callable);
        }

        $params = array_values($_REQUEST);

        return $this->{$this->callable}(...$params);
    }

    protected function outResponse(): void
    {
        if (!$this->isFinish && $this->isRun && !count($this->errors)) {
            $this->errors[] = 'not finished';
        }

        $this->response['finished'] = $this->isFinish;
        $this->response['errors']   = $this->errors;

        if (count($this->errors)) {
            $this->response['result'] = false;
        } else {
            if ($this->isFinish && is_null($this->result)) {
                $this->response['result'] = true;
            } else {
                $this->response['result'] = $this->result;
            }
        }

        $this->echoResponse();
    }

    protected function outResponseDummy(): void
    {
        if (!$this->isFinish && $this->isRun && !count($this->errors)) {
            $this->errors[] = 'not finished';
        }

        $this->response['finished'] = $this->isFinish;
        $this->response['errors']   = $this->errors;

        if (count($this->errors)) {
            $this->response['result'] = false;
        } else {
            $this->response['result'] = true;
        }

        $this->echoResponse();
    }

    protected function echoResponse(): void
    {
        $flags = $this->jsonFlags;

        if ($this->prettyPrint) {
            $flags = JSON_PRETTY_PRINT | $flags;
        }

        try {
            $response = json_encode($this->response, JSON_THROW_ON_ERROR | $flags);
        } catch (\Throwable $e) {
            $message = <<< TEXT
{$exception->getCode()} Exception in file {$exception->getFile()} in line {$exception->getLine()}: {$exception->getMessage()}
TEXT;
            LogWriter::warning($message);

            $response = [
                'finished' => false,
                'result'   => false,
                'errors'   => $this->errors,
            ];

            try {
                $response = json_encode($response, JSON_THROW_ON_ERROR | $flags);
            } catch (\Throwable $e) {
                $response = [
                    'finished' => false,
                    'result'   => false,
                    'errors'   => [
                        'ajax handler panic',
                    ],
                ];

                $response = @json_encode($response);
            }
        }

        echo $response;
    }

    protected function setCallable(): void
    {
        $this->action   = $this->getQueryValue($this->actionName, self::DEFAUlT_ACTION);
        $this->action   = lcfirst($this->action);
        $this->callable = $this->action . 'Action';
    }

    /**
     * Метод, гарантирующий получение параметров запроса не зависимо от метода и типа содержимого.
     *
     * @return array
     */
    protected function getQuery(): array
    {
        if (array_key_exists('HTTP_X_CONTENT_TYPE', $_SERVER)) {
            $contentTypeValue = trim($_SERVER['HTTP_X_CONTENT_TYPE']);
        } elseif (array_key_exists('CONTENT_TYPE', $_SERVER)) {
            $contentTypeValue = trim($_SERVER['CONTENT_TYPE']);
        } else {
            $contentTypeValue = '';
        }

        $contentTypeParsed = explode(';', $contentTypeValue);

        $contentType = $contentTypeParsed[0] ?? '';
        $contentType = strtolower($contentType);

        $rawDataParsed = null;

        $rawDataValue = file_get_contents('php://input');

        $rawDataValue = trim($rawDataValue);

        if ($this->isPost()) {
            if ($rawDataValue) {
                switch ($contentType) {
                    case 'application/json':
                        {
                            $rawDataParsed = json_decode($rawDataValue, true, 512, JSON_THROW_ON_ERROR);
                        }
                        break;

                    case 'multipart/form-data':
                        {
                            $boundary = $contentTypeParsed[1] ?? '';

                            $rawDataParsed = $this->parseMultipartFormData($rawDataValue, $boundary);
                        }
                        break;

                    default:
                    {
                        parse_str($rawDataValue, $rawDataParsed);
                    }
                }
            }
        } else {
            switch ($contentType) {
                case 'application/json':
                    {
                        $rawDataParsed = ($rawDataValue) ? json_decode($rawDataValue, true) : [];

                        foreach ($_REQUEST as $key => $value) {
                            try {
                                $valueParsed = json_decode($value, true, 512, JSON_THROW_ON_ERROR);
                            } catch (\Exception | \Throwable $e) {
                                $valueParsed = $value;
                            }

                            $rawDataParsed[$key] = $valueParsed;
                        }

                        $_REQUEST = [];
                    }
                    break;

                case 'multipart/form-data':
                    {
                        $boundary = $contentTypeParsed[1] ?? '';

                        $rawDataParsed = $this->parseMultipartFormData($rawDataValue, $boundary);
                    }
                    break;

                default:
                {
                    parse_str($rawDataValue, $rawDataParsed);
                }
            }
        }

        if (is_array($rawDataParsed) && count($rawDataParsed)) {
            $result = array_merge($_REQUEST, $rawDataParsed);

            return $result;
        }
        return $_REQUEST;
    }

    protected function parseMultipartFormData($input, $boundary): array
    {
        preg_match('/boundary=(.*)$/', $boundary, $matches);
        $boundary = $matches[1];

        $blocks = preg_split("/-+$boundary/", $input);
        array_pop($blocks);

        $result = [];

        $delimiter = "\r\n";

        foreach ($blocks as $id => $block) {
            $block = trim($block);

            if (!$block) {
                continue;
            }

            $block = str_replace($delimiter, "\n", $block);
            $block = str_replace("\n", $delimiter, $block);

            $arBlock = explode($delimiter, $block);

            $name     = null;
            $filename = null;
            $mime     = null;
            $value    = null;

            $collectValue = false;

            foreach ($arBlock as $str) {
                $str = trim($str);

                if (!$str) {
                    if (!$collectValue) {
                        $collectValue = true;

                        continue;
                    }
                    break;
                }

                if ($collectValue) {
                    $value = $str;

                    break;
                }
                $header = explode(': ', $str);

                if (count($header) !== 2) {
                    continue;
                }

                $headerName  = strtolower($header[0]);
                $headerValue = $header[1];

                switch ($headerName) {
                    case 'content-disposition': {
                        $dispositions = explode('; ', $headerValue);

                        if (count($dispositions) <= 1) {
                            break;
                        }

                        $first = array_shift($dispositions);

                        foreach ($dispositions as $disposition) {
                            $dispositionNameValue = explode('=', $disposition);

                            if (count($dispositionNameValue) !== 2) {
                                continue;
                            }

                            $dispositionName  = $dispositionNameValue[0];
                            $dispositionValue = $dispositionNameValue[1];

                            if (preg_match('/^"(.*?)"$|^\'(.*?)\'$/m', $dispositionValue, $dispositionValueMatches) !== 1) {
                                continue;
                            }

                            $dispositionNameLow = strtolower($dispositionName);

                            $dispositionValueReal = (!empty($dispositionValueMatches[2])) ? $dispositionValueMatches[2] : $dispositionValueMatches[1];

                            switch ($dispositionNameLow) {
                                case 'name': {
                                    $name = $dispositionValueReal;
                                }
                                    break;

                                case 'filename': {
                                    $filename = $dispositionValueReal;
                                }
                                    break;
                            }
                        }
                    }
                        break;

                    case 'content-type': {
                        $mime = $headerValue;
                    }
                        break;
                }
            }

            if (!$name || !$value) {
                continue;
            }

            if ($filename && $mime) {
                $file = new \stdClass();

                $file->filename = $filename;
                $file->mime     = $mime;
                $file->content  = $value;

                $value = $file;
            }

            if (strpos($name, '[') === false) {
                if (!array_key_exists($name, $result)) {
                    $result[$name] = $value;
                } else {
                    if (!is_array($result[$name])) {
                        $result[$name] = [$result[$name]];
                    }

                    $result[$name][] = $value;
                }
            } else {
                $nameArr      = explode('[', $name);
                $nameArrCount = count($nameArr);
                $nameArrLast  = $nameArrCount - 1;

                $pointer = &$result;

                foreach ($nameArr as $index => $namePart) {
                    $isLast = ($index === $nameArrLast);

                    $namePart = str_replace(']', '', $namePart);

                    if ($isLast) {
                        if ($namePart === '') {
                            $pointer[] = $value;
                        } else {
                            $pointer[$namePart] = $value;
                        }
                    } else {
                        if ($namePart === '') {
                            $pointer[] = [];

                            $pointerKeys         = array_keys($pointer);
                            $pointerKeysReversed = array_reverse($pointerKeys);
                            $pointerKey          = array_shift($pointerKeysReversed);

                            $pointer = &$pointer[$pointerKey];
                        } else {
                            if (!array_key_exists($namePart, $pointer)) {
                                $pointer[$namePart] = [];
                            }

                            $pointer = &$pointer[$namePart];
                        }
                    }
                }
            }
        }

        return $result;
    }

    protected function redirect($url): void
    {
        $this->onlyHeaders                     = true;
        $this->code                            = 302;
        $this->headersAdditional['X-Location'] = $url;
    }

    public static function getHttpStatusTexts(): array
    {
        $result = [
            100 => 'Continue',
            101 => 'Switching Protocols',
            102 => 'Processing',
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            207 => 'Multi-Status',
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            305 => 'Use Proxy',
            307 => 'Temporary Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Request Entity Too Large',
            414 => 'Request-URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Requested Range Not Satisfiable',
            417 => 'Expectation Failed',
            422 => 'Unprocessable Entity',
            423 => 'Locked',
            424 => 'Failed Dependency',
            426 => 'Upgrade Required',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            506 => 'Variant Also Negotiates',
            507 => 'Insufficient Storage',
            509 => 'Bandwidth Limit Exceeded',
            510 => 'Not Extended',
        ];

        return $result;
    }
}
