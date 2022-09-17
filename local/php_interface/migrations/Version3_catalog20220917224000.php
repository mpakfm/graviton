<?php

namespace Sprint\Migration;


class Version3_catalog20220917224000 extends Version
{
    protected $description = "Товарный каталог";

    protected $moduleVersion = "4.1.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Iblock()->saveIblockType(array (
  'ID' => 'catalog',
  'SECTIONS' => 'Y',
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'IN_RSS' => 'N',
  'SORT' => '500',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Каталог',
      'SECTION_NAME' => '',
      'ELEMENT_NAME' => '',
    ),
    'en' => 
    array (
      'NAME' => 'Catalog',
      'SECTION_NAME' => '',
      'ELEMENT_NAME' => '',
    ),
  ),
));
        $iblockId = $helper->Iblock()->saveIblock(array (
  'IBLOCK_TYPE_ID' => 'catalog',
  'LID' => 
  array (
    0 => 's1',
  ),
  'CODE' => 'product',
  'API_CODE' => 'product',
  'REST_ON' => 'Y',
  'NAME' => 'Продукты',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '#SITE_DIR#/catalog/index.php?ID=#IBLOCK_ID#',
  'DETAIL_PAGE_URL' => '#SITE_DIR#/catalog/detail.php?ID=#ELEMENT_ID#',
  'SECTION_PAGE_URL' => '#SITE_DIR#/catalog/list.php?SECTION_ID=#SECTION_ID#',
  'CANONICAL_PAGE_URL' => '',
  'PICTURE' => NULL,
  'DESCRIPTION' => '',
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => NULL,
  'INDEX_ELEMENT' => 'Y',
  'INDEX_SECTION' => 'Y',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => '',
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => 'N',
  'PROPERTY_INDEX' => 'N',
  'VERSION' => '1',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Элементы',
  'ELEMENT_NAME' => 'Элемент',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => 'graviton.site',
  'IPROPERTY_TEMPLATES' => 
  array (
  ),
  'ELEMENT_ADD' => 'Добавить элемент',
  'ELEMENT_EDIT' => 'Изменить элемент',
  'ELEMENT_DELETE' => 'Удалить элемент',
  'SECTION_ADD' => 'Добавить раздел',
  'SECTION_EDIT' => 'Изменить раздел',
  'SECTION_DELETE' => 'Удалить раздел',
));
        $helper->Iblock()->saveIblockFields($iblockId, array (
  'IBLOCK_SECTION' => 
  array (
    'NAME' => 'Привязка к разделам',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'KEEP_IBLOCK_SECTION_ID' => 'N',
    ),
  ),
  'ACTIVE' => 
  array (
    'NAME' => 'Активность',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'Y',
  ),
  'ACTIVE_FROM' => 
  array (
    'NAME' => 'Начало активности',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'ACTIVE_TO' => 
  array (
    'NAME' => 'Окончание активности',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SORT' => 
  array (
    'NAME' => 'Сортировка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '0',
  ),
  'NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'PREVIEW_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'FROM_DETAIL' => 'N',
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'DELETE_WITH_DETAIL' => 'N',
      'UPDATE_WITH_DETAIL' => 'N',
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'PREVIEW_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип описания для анонса',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'PREVIEW_TEXT' => 
  array (
    'NAME' => 'Описание для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'DETAIL_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип детального описания',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'DETAIL_TEXT' => 
  array (
    'NAME' => 'Детальное описание',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
  'TAGS' => 
  array (
    'NAME' => 'Теги',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'FROM_DETAIL' => 'N',
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'DELETE_WITH_DETAIL' => 'N',
      'UPDATE_WITH_DETAIL' => 'N',
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'SECTION_DESCRIPTION_TYPE' => 
  array (
    'NAME' => 'Тип описания',
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 'text',
  ),
  'SECTION_DESCRIPTION' => 
  array (
    'NAME' => 'Описание',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'SCALE' => 'N',
      'WIDTH' => '',
      'HEIGHT' => '',
      'IGNORE_ERRORS' => 'N',
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
      'USE_WATERMARK_TEXT' => 'N',
      'WATERMARK_TEXT' => '',
      'WATERMARK_TEXT_FONT' => '',
      'WATERMARK_TEXT_COLOR' => '',
      'WATERMARK_TEXT_SIZE' => '',
      'WATERMARK_TEXT_POSITION' => 'tl',
      'USE_WATERMARK_FILE' => 'N',
      'WATERMARK_FILE' => '',
      'WATERMARK_FILE_ALPHA' => '',
      'WATERMARK_FILE_POSITION' => 'tl',
      'WATERMARK_FILE_ORDER' => NULL,
    ),
  ),
  'SECTION_XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => '',
  ),
  'SECTION_CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
));
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'administrators' => 'X',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Процессор',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'CPU',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'AMD EPYC 7402',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7402',
    ),
    1 => 
    array (
      'VALUE' => 'AMD EPYC 7443P',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7443P',
    ),
    2 => 
    array (
      'VALUE' => 'AMD EPYC 7453',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7453',
    ),
    3 => 
    array (
      'VALUE' => 'AMD EPYC 74F3',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '74F3',
    ),
    4 => 
    array (
      'VALUE' => 'AMD EPYC 7513',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7513',
    ),
    5 => 
    array (
      'VALUE' => 'AMD EPYC 7532',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7532',
    ),
    6 => 
    array (
      'VALUE' => 'AMD EPYC 7543',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7543',
    ),
    7 => 
    array (
      'VALUE' => 'AMD EPYC 7543P',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7543P',
    ),
    8 => 
    array (
      'VALUE' => 'AMD EPYC 75F3',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '75F3',
    ),
    9 => 
    array (
      'VALUE' => 'AMD EPYC 7642',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7642',
    ),
    10 => 
    array (
      'VALUE' => 'AMD EPYC 7643',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7643',
    ),
    11 => 
    array (
      'VALUE' => 'AMD EPYC 7662',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7662',
    ),
    12 => 
    array (
      'VALUE' => 'AMD EPYC 7702',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7702',
    ),
    13 => 
    array (
      'VALUE' => 'AMD EPYC 7702P',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7702P',
    ),
    14 => 
    array (
      'VALUE' => 'AMD EPYC 7713',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7713',
    ),
    15 => 
    array (
      'VALUE' => 'AMD EPYC 7713P',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7713P',
    ),
    16 => 
    array (
      'VALUE' => 'AMD EPYC 7742',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7742',
    ),
    17 => 
    array (
      'VALUE' => 'AMD EPYC 7763',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7763',
    ),
    18 => 
    array (
      'VALUE' => 'AMD EPYC 7773X',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7773X',
    ),
    19 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper 3960X',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3960X',
    ),
    20 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper 3970X',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3970X',
    ),
    21 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper 3990X',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3990X',
    ),
    22 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 3975WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3975WX',
    ),
    23 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 3995WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3995WX',
    ),
    24 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 5955WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5955WX',
    ),
    25 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 5965WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5965WX',
    ),
    26 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 5975WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5975WX',
    ),
    27 => 
    array (
      'VALUE' => 'AMD Ryzen Threadripper PRO 5995WX',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5995WX',
    ),
    28 => 
    array (
      'VALUE' => 'Intel Xeon Gold 6314U',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6314U',
    ),
    29 => 
    array (
      'VALUE' => 'Intel Xeon Gold 6348',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6348',
    ),
    30 => 
    array (
      'VALUE' => 'Intel Xeon Platinum 8347C',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8347C',
    ),
    31 => 
    array (
      'VALUE' => 'Intel Xeon Platinum 8358',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8358',
    ),
    32 => 
    array (
      'VALUE' => 'Intel Xeon Platinum 8375C',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8375C',
    ),
    33 => 
    array (
      'VALUE' => 'Intel Xeon Platinum 8380',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8380',
    ),
    34 => 
    array (
      'VALUE' => 'Intel Xeon W-3375',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'W-3375',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Экран',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SCREEN',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '1024 × 600',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's41',
    ),
    1 => 
    array (
      'VALUE' => '1024 × 768',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's40',
    ),
    2 => 
    array (
      'VALUE' => '10240 × 5760',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's3',
    ),
    3 => 
    array (
      'VALUE' => '1152 × 864',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's39',
    ),
    4 => 
    array (
      'VALUE' => '11520 × 6480',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's1',
    ),
    5 => 
    array (
      'VALUE' => '1200 × 600',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's38',
    ),
    6 => 
    array (
      'VALUE' => '1280 × 1024',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's35',
    ),
    7 => 
    array (
      'VALUE' => '1280 × 720',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's37',
    ),
    8 => 
    array (
      'VALUE' => '1280 × 768',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's36',
    ),
    9 => 
    array (
      'VALUE' => '1400 × 1050',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's32',
    ),
    10 => 
    array (
      'VALUE' => '1408 × 1152',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's34',
    ),
    11 => 
    array (
      'VALUE' => '1440 × 1080',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's31',
    ),
    12 => 
    array (
      'VALUE' => '1440 × 900',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's33',
    ),
    13 => 
    array (
      'VALUE' => '1536 × 1024',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's29',
    ),
    14 => 
    array (
      'VALUE' => '1536 × 960',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's30',
    ),
    15 => 
    array (
      'VALUE' => '1600 × 1024',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's27',
    ),
    16 => 
    array (
      'VALUE' => '1600 × 1200',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's26',
    ),
    17 => 
    array (
      'VALUE' => '1600 × 900',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's28',
    ),
    18 => 
    array (
      'VALUE' => '1680 × 1050',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's25',
    ),
    19 => 
    array (
      'VALUE' => '1920 × 1080',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's24',
    ),
    20 => 
    array (
      'VALUE' => '1920 × 1200',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's23',
    ),
    21 => 
    array (
      'VALUE' => '2048 × 1080',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's22',
    ),
    22 => 
    array (
      'VALUE' => '2048 × 1152',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's21',
    ),
    23 => 
    array (
      'VALUE' => '2048 × 1536',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's20',
    ),
    24 => 
    array (
      'VALUE' => '2560 × 1080',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's19',
    ),
    25 => 
    array (
      'VALUE' => '2560 × 1440',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's18',
    ),
    26 => 
    array (
      'VALUE' => '2560 × 1600',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's17',
    ),
    27 => 
    array (
      'VALUE' => '2560 × 2048',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's16',
    ),
    28 => 
    array (
      'VALUE' => '3200 × 1800',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's15',
    ),
    29 => 
    array (
      'VALUE' => '3200 × 2048',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's14',
    ),
    30 => 
    array (
      'VALUE' => '3200 × 2400',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's13',
    ),
    31 => 
    array (
      'VALUE' => '3440 × 1440',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's12',
    ),
    32 => 
    array (
      'VALUE' => '3840 × 2160',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's11',
    ),
    33 => 
    array (
      'VALUE' => '3840 × 2400',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's10',
    ),
    34 => 
    array (
      'VALUE' => '4096 × 2160',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's9',
    ),
    35 => 
    array (
      'VALUE' => '5120 × 2880',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's8',
    ),
    36 => 
    array (
      'VALUE' => '5120 × 4096',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's7',
    ),
    37 => 
    array (
      'VALUE' => '6400 × 4096',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's6',
    ),
    38 => 
    array (
      'VALUE' => '6400 × 4800',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's5',
    ),
    39 => 
    array (
      'VALUE' => '7680 × 4320',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's4',
    ),
    40 => 
    array (
      'VALUE' => '7680 × 4800',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8b62df37b8cabf0b436eb57e566ba59d',
    ),
    41 => 
    array (
      'VALUE' => '960 × 540',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 's42',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Набор микросхем',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'CHIPSET',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'AMD A320',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'A320',
    ),
    1 => 
    array (
      'VALUE' => 'AMD A520',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'A520',
    ),
    2 => 
    array (
      'VALUE' => 'AMD B350',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'B350',
    ),
    3 => 
    array (
      'VALUE' => 'AMD B450',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'B450',
    ),
    4 => 
    array (
      'VALUE' => 'AMD B550',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'B550',
    ),
    5 => 
    array (
      'VALUE' => 'AMD X370',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'X370',
    ),
    6 => 
    array (
      'VALUE' => 'AMD X470',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'X470',
    ),
    7 => 
    array (
      'VALUE' => 'AMD X570',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'X570',
    ),
    8 => 
    array (
      'VALUE' => 'Intel B660',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'B660',
    ),
    9 => 
    array (
      'VALUE' => 'Intel H610',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'H610',
    ),
    10 => 
    array (
      'VALUE' => 'Intel H670',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'H670',
    ),
    11 => 
    array (
      'VALUE' => 'Intel W580',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'W580',
    ),
    12 => 
    array (
      'VALUE' => 'Intel Z590',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Z590',
    ),
    13 => 
    array (
      'VALUE' => 'Intel Z690',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Z690',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Графика',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'GPU',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'AMD Radeon Pro W6800',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'W6800',
    ),
    1 => 
    array (
      'VALUE' => 'AMD Radeon RX 6800 XT',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6800XT',
    ),
    2 => 
    array (
      'VALUE' => 'AMD Radeon RX 6900 XT',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6900XT',
    ),
    3 => 
    array (
      'VALUE' => 'AMD Radeon RX 6900 XT Liquid Cooled',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6950XTLiquid',
    ),
    4 => 
    array (
      'VALUE' => 'AMD Radeon RX 6950 XT',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6950XT',
    ),
    5 => 
    array (
      'VALUE' => 'NVIDIA GeForce RTX 3080',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3080',
    ),
    6 => 
    array (
      'VALUE' => 'NVIDIA GeForce RTX 3080 12GB',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3080_12GB',
    ),
    7 => 
    array (
      'VALUE' => 'NVIDIA GeForce RTX 3080 Ti',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3080Ti',
    ),
    8 => 
    array (
      'VALUE' => 'NVIDIA GeForce RTX 3090',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3090',
    ),
    9 => 
    array (
      'VALUE' => 'NVIDIA GeForce RTX 3090 Ti',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3090TI',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Оперативная память',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'RAM_TYPE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'DDR2',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'DDR2',
    ),
    1 => 
    array (
      'VALUE' => 'DDR3',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'DDR3',
    ),
    2 => 
    array (
      'VALUE' => 'DDR4',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'DDR4',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Накопители',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'HDD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'HDD',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'HDD',
    ),
    1 => 
    array (
      'VALUE' => 'SSD',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SSD',
    ),
    2 => 
    array (
      'VALUE' => 'SSHD',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SSHD',
    ),
  ),
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'catalog',
      'FEATURE_ID' => 'IN_BASKET',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    2 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Камера',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'CAMERA',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Аудио',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'AUDIO',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Сетевые интерфейсы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'LAN',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Беспроводные интерфейсы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'WLAN',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Порты на передней панели',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'FRONT_PORTS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'directory',
  'USER_TYPE_SETTINGS' => 
  array (
    'size' => 1,
    'width' => 0,
    'group' => 'N',
    'multiple' => 'N',
    'TABLE_NAME' => 'b_hlbd_ports',
  ),
  'HINT' => '',
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Порты на боковой панели',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SIDE_PORTS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'directory',
  'USER_TYPE_SETTINGS' => 
  array (
    'size' => 1,
    'width' => 0,
    'group' => 'N',
    'multiple' => 'N',
    'TABLE_NAME' => 'b_hlbd_ports',
  ),
  'HINT' => '',
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Порты на задней панели',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'BACK_PORTS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'directory',
  'USER_TYPE_SETTINGS' => 
  array (
    'size' => 1,
    'width' => 0,
    'group' => 'N',
    'multiple' => 'N',
    'TABLE_NAME' => 'b_hlbd_ports',
  ),
  'HINT' => '',
  'FEATURES' => 
  array (
    0 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    1 => 
    array (
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
));
        $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => '',
      ),
      'columns_sizes' => 
      array (
        'expand' => 1,
        'columns' => 
        array (
        ),
      ),
      'sticked_columns' => 
      array (
      ),
      'last_sort_by' => 'sort',
      'last_sort_order' => 'asc',
    ),
  ),
  'filters' => 
  array (
  ),
  'current_view' => 'default',
));

    }

    public function down()
    {
        //your code ...
    }
}
