<?php

namespace Sprint\Migration;


class Version12_catalog_update20221007111444 extends Version
{
    protected $description = "";

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
  'SECTION_PROPERTY' => 'Y',
  'PROPERTY_INDEX' => 'Y',
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
    'IS_REQUIRED' => 'Y',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'Y',
      'TRANSLITERATION' => 'Y',
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
  'everyone' => 'R',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Подзаголовок',
  'ACTIVE' => 'Y',
  'SORT' => '100',
  'CODE' => 'SUBTITLE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'Y',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Текст характеристики',
  'ACTIVE' => 'Y',
  'SORT' => '200',
  'CODE' => 'CHARACTERISTICS',
  'DEFAULT_VALUE' => 
  array (
    'TYPE' => 'HTML',
    'TEXT' => '',
  ),
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Картинка по центру',
  'ACTIVE' => 'Y',
  'SORT' => '200',
  'CODE' => 'DETAIL_IMG_CENTER',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Картинка снизу',
  'ACTIVE' => 'Y',
  'SORT' => '200',
  'CODE' => 'DETAIL_IMG_BOTTOM',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
  'LIST_TYPE' => 'C',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'YES',
    ),
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
  'LIST_TYPE' => 'C',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'YES',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'ID поста блога для комментариев',
  'ACTIVE' => 'N',
  'SORT' => '500',
  'CODE' => 'BLOG_POST_ID',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => 'BLOG_POST_ID',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Количество комментариев',
  'ACTIVE' => 'N',
  'SORT' => '500',
  'CODE' => 'BLOG_COMMENTS_CNT',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => 'BLOG_COMMENTS_CNT',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Новинка',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'NEW',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'C',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'YES',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'SSD‑накопитель',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'VOLUME_SSD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'HDD‑накопитель',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'VOLUME_HDD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'SHDD‑накопитель',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'VOLUME_SHDD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Оперативная память',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'VOLUME_RAM',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'N',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Первый экран. Текст. ',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'TEXT_ABOUT',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Первый экран. Реестр',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'TEXT_REGYSTRY',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Правые поля. Поле 1 название',
  'ACTIVE' => 'Y',
  'SORT' => '1000',
  'CODE' => 'RIGHT_FIELD1',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Правые поля. Поле 1 значение',
  'ACTIVE' => 'Y',
  'SORT' => '1100',
  'CODE' => 'RIGHT_VALUE1',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Правые поля. Поле 2 название',
  'ACTIVE' => 'Y',
  'SORT' => '1200',
  'CODE' => 'RIGHT_FIELD2',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Правые поля. Поле 2 значение',
  'ACTIVE' => 'Y',
  'SORT' => '1300',
  'CODE' => 'RIGHT_VALUE2',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 1. Название',
  'ACTIVE' => 'Y',
  'SORT' => '2100',
  'CODE' => 'BENEFIT1_TITLE',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 1. Картинка',
  'ACTIVE' => 'Y',
  'SORT' => '2200',
  'CODE' => 'BENEFIT1_IMG',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 1. Текст',
  'ACTIVE' => 'Y',
  'SORT' => '2300',
  'CODE' => 'BENEFIT1_TEXT',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 2. Название',
  'ACTIVE' => 'Y',
  'SORT' => '2400',
  'CODE' => 'BENEFIT2_TITLE',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 2. Картинка',
  'ACTIVE' => 'Y',
  'SORT' => '2500',
  'CODE' => 'BENEFIT2_IMG',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Ячейки. 2. Текст',
  'ACTIVE' => 'Y',
  'SORT' => '2600',
  'CODE' => 'BENEFIT2_TEXT',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Видео. Текст',
  'ACTIVE' => 'Y',
  'SORT' => '3000',
  'CODE' => 'VIDEO_TEXT',
  'DEFAULT_VALUE' => 
  array (
    'TEXT' => '',
    'TYPE' => 'HTML',
  ),
  'PROPERTY_TYPE' => 'S',
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
  'USER_TYPE' => 'HTML',
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => 200,
  ),
  'HINT' => '',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Видео. Ссылка на ролик',
  'ACTIVE' => 'Y',
  'SORT' => '3100',
  'CODE' => 'VIDEO_LINK',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Видео. Год',
  'ACTIVE' => 'Y',
  'SORT' => '3200',
  'CODE' => 'VIDEO_YEAR',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Процессор',
  'ACTIVE' => 'Y',
  'SORT' => '10100',
  'CODE' => 'T_CPU',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Операционная система',
  'ACTIVE' => 'Y',
  'SORT' => '10200',
  'CODE' => 'T_OS',
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
  'SEARCHABLE' => 'Y',
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
      'VALUE' => 'Windows 10 Pro x64',
      'DEF' => 'N',
      'SORT' => '100',
      'XML_ID' => 'OS_W10_64',
    ),
    1 => 
    array (
      'VALUE' => 'Astra Linux Common Edition «ОРЕЛ»',
      'DEF' => 'N',
      'SORT' => '200',
      'XML_ID' => 'OS_ALT_O',
    ),
    2 => 
    array (
      'VALUE' => 'Astra Linux Special Edition «СМОЛЕНСК»',
      'DEF' => 'N',
      'SORT' => '300',
      'XML_ID' => 'OS_ALT_S',
    ),
    3 => 
    array (
      'VALUE' => 'Альт Рабочая Станция 9/10',
      'DEF' => 'N',
      'SORT' => '400',
      'XML_ID' => 'OS_WS9',
    ),
    4 => 
    array (
      'VALUE' => 'FreeBSD',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'OS_FREEBSD',
    ),
    5 => 
    array (
      'VALUE' => 'MSDOS',
      'DEF' => 'N',
      'SORT' => '600',
      'XML_ID' => 'OS_MSDOS',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Экран',
  'ACTIVE' => 'Y',
  'SORT' => '10300',
  'CODE' => 'T_SCREEN',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Оперативная память',
  'ACTIVE' => 'Y',
  'SORT' => '10400',
  'CODE' => 'T_RAM_TYPE',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Набор микросхем',
  'ACTIVE' => 'Y',
  'SORT' => '10500',
  'CODE' => 'T_CHIPSET',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Накопители',
  'ACTIVE' => 'Y',
  'SORT' => '10500',
  'CODE' => 'T_HDD',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Сетевые интерфейсы',
  'ACTIVE' => 'Y',
  'SORT' => '10500',
  'CODE' => 'T_LAN',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Bluetooth',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'bt',
    ),
    1 => 
    array (
      'VALUE' => 'LAN',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'lan',
    ),
    2 => 
    array (
      'VALUE' => 'Wifi',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'wifi',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Беспроводные интерфейсы',
  'ACTIVE' => 'Y',
  'SORT' => '10500',
  'CODE' => 'T_WLAN',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'C',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'wlan 1',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'w1',
    ),
    1 => 
    array (
      'VALUE' => 'wlan 2',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'w2',
    ),
    2 => 
    array (
      'VALUE' => 'wlan 3',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'w3',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Графика',
  'ACTIVE' => 'Y',
  'SORT' => '10600',
  'CODE' => 'T_GPU',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Видеокамера',
  'ACTIVE' => 'Y',
  'SORT' => '10800',
  'CODE' => 'T_VIDEOCAMERA',
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
  'SEARCHABLE' => 'Y',
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
      'VALUE' => '2 МП',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VC_2',
    ),
    1 => 
    array (
      'VALUE' => '2 МП с возможностью аппаратного отключения',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VC_2_E',
    ),
    2 => 
    array (
      'VALUE' => '4 МП',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VC_4',
    ),
    3 => 
    array (
      'VALUE' => '4 МП с возможностью аппаратного отключения',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VC_4_E',
    ),
    4 => 
    array (
      'VALUE' => '8 МП',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VC_8',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Порты на передней панели',
  'ACTIVE' => 'Y',
  'SORT' => '11100',
  'CODE' => 'T_FRONT_PORTS',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Порты на боковой панели',
  'ACTIVE' => 'Y',
  'SORT' => '11200',
  'CODE' => 'T_SIDE_PORTS',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Порты на задней панели',
  'ACTIVE' => 'Y',
  'SORT' => '11300',
  'CODE' => 'T_BACK_PORTS',
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
  'SEARCHABLE' => 'Y',
  'FILTRABLE' => 'Y',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Дополнительно',
  'ACTIVE' => 'Y',
  'SORT' => '12100',
  'CODE' => 'T_ADD_LIST',
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
  'SEARCHABLE' => 'Y',
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
      'VALUE' => 'Возможность подзарядки внешних мобильных устройств при выключенном питании',
      'DEF' => 'N',
      'SORT' => '100',
      'XML_ID' => 'A1',
    ),
    1 => 
    array (
      'VALUE' => 'Клавиатура с защитой от пролития жидкостей',
      'DEF' => 'N',
      'SORT' => '200',
      'XML_ID' => 'A2',
    ),
    2 => 
    array (
      'VALUE' => 'Подсветка клавиатуры (опция)',
      'DEF' => 'N',
      'SORT' => '300',
      'XML_ID' => 'A3',
    ),
    3 => 
    array (
      'VALUE' => 'Сканер отпечатка пальцев (опция)',
      'DEF' => 'N',
      'SORT' => '400',
      'XML_ID' => 'A4',
    ),
    4 => 
    array (
      'VALUE' => 'Манипулятор мышь, в т.ч. беспроводная (опция)',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'A5',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Х.Габариты (Ш × Г × В)',
  'ACTIVE' => 'Y',
  'SORT' => '15100',
  'CODE' => 'T_DIMENSIONS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
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
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Документация',
  'ACTIVE' => 'Y',
  'SORT' => '50100',
  'CODE' => 'M_DOCS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '100',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'Y',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => 'Обязательно заполнять название для файла',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Сертификаты',
  'ACTIVE' => 'Y',
  'SORT' => '50200',
  'CODE' => 'M_SERT',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '100',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'Y',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => 'Обязательно заполнять название для файла',
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Драйвера',
  'ACTIVE' => 'Y',
  'SORT' => '50300',
  'CODE' => 'M_DRIVERS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'F',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '100',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'Y',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '1',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => 'Обязательно заполнять название для файла',
));
            $helper->UserOptions()->saveElementForm($iblockId, array (
  'Элемент|edit1' => 
  array (
    'ID' => 'ID',
    'DATE_CREATE' => 'Создан',
    'TIMESTAMP_X' => 'Изменен',
    'ACTIVE' => 'Активность',
    'ACTIVE_FROM' => 'Начало активности',
    'ACTIVE_TO' => 'Окончание активности',
    'NAME' => 'Название',
    'CODE' => 'Символьный код',
    'SORT' => 'Сортировка',
    'IBLOCK_ELEMENT_PROP_VALUE' => 'Значения свойств',
    'PROPERTY_SUBTITLE' => 'Подзаголовок',
    'PROPERTY_VOLUME_HDD' => 'HDD‑накопитель',
    'PROPERTY_VOLUME_SHDD' => 'SHDD‑накопитель',
    'PROPERTY_VOLUME_SSD' => 'SSD‑накопитель',
    'PROPERTY_RIGHT_FIELD1' => 'Правые поля. Поле 1 название',
    'PROPERTY_RIGHT_VALUE1' => 'Правые поля. Поле 1 значение',
    'PROPERTY_RIGHT_FIELD2' => 'Правые поля. Поле 2 название',
    'PROPERTY_RIGHT_VALUE2' => 'Правые поля. Поле 2 значение',
    'PROPERTY_AUDIO' => 'Аудио',
    'PROPERTY_CAMERA' => 'Камера',
    'PROPERTY_NEW' => 'Новинка',
    'PROPERTY_VOLUME_RAM' => 'Оперативная память',
    'PROPERTY_VIDEO_TEXT' => 'Видео. Текст',
    'PROPERTY_VIDEO_YEAR' => 'Видео. Год',
    'PROPERTY_VIDEO_LINK' => 'Видео. Ссылка на ролик',
  ),
  'Анонс|edit5' => 
  array (
    'PREVIEW_PICTURE' => 'Картинка для анонса',
    'PREVIEW_TEXT' => 'Описание для анонса',
  ),
  'Подробно|edit6' => 
  array (
    'PROPERTY_TEXT_REGYSTRY' => 'Первый экран. Реестр',
    'PROPERTY_TEXT_ABOUT' => 'Первый экран. Текст.',
    'DETAIL_PICTURE' => 'Детальная картинка',
    'PROPERTY_DETAIL_IMG_CENTER' => 'Картинка по центру',
    'PROPERTY_DETAIL_IMG_BOTTOM' => 'Картинка снизу',
    'PROPERTY_CHARACTERISTICS' => 'Текст характеристики',
    'DETAIL_TEXT' => 'Детальное описание',
    'PROPERTY_BENEFIT1_TITLE' => 'Ячейки. 1. Название',
    'PROPERTY_BENEFIT1_IMG' => 'Ячейки. 1. Картинка',
    'PROPERTY_BENEFIT1_TEXT' => 'Ячейки. 1. Текст',
    'PROPERTY_BENEFIT2_TITLE' => 'Ячейки. 2. Название',
    'PROPERTY_BENEFIT2_IMG' => 'Ячейки. 2. Картинка',
    'PROPERTY_BENEFIT2_TEXT' => 'Ячейки. 2. Текст',
  ),
  'Характеристики|cedit1' => 
  array (
    'PROPERTY_T_CPU' => 'Процессор',
    'PROPERTY_T_OS' => 'Операционная система',
    'PROPERTY_T_SCREEN' => 'Экран',
    'PROPERTY_T_HDD' => 'Накопители',
    'PROPERTY_T_RAM_TYPE' => 'Х.Оперативная память',
    'PROPERTY_T_WLAN' => 'Х.Беспроводные интерфейсы',
    'PROPERTY_T_GPU' => 'Х.Графика',
    'PROPERTY_T_CHIPSET' => 'Набор микросхем',
    'PROPERTY_T_LAN' => 'Сетевые интерфейсы',
    'PROPERTY_T_VIDEOCAMERA' => 'Видеокамера',
    'PROPERTY_T_FRONT_PORTS' => 'Порты на передней панели',
    'PROPERTY_T_SIDE_PORTS' => 'Порты на боковой панели',
    'PROPERTY_T_BACK_PORTS' => 'Порты на задней панели',
    'PROPERTY_T_ADD_LIST' => 'Дополнительно',
    'PROPERTY_T_DIMENSIONS' => 'Габариты (Ш × Г × В)',
  ),
  'SEO|edit14' => 
  array (
    'IPROPERTY_TEMPLATES_ELEMENT_META_TITLE' => 'Шаблон META TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_META_KEYWORDS' => 'Шаблон META KEYWORDS',
    'IPROPERTY_TEMPLATES_ELEMENT_META_DESCRIPTION' => 'Шаблон META DESCRIPTION',
    'IPROPERTY_TEMPLATES_ELEMENT_PAGE_TITLE' => 'Заголовок элемента',
    'IPROPERTY_TEMPLATES_ELEMENTS_PREVIEW_PICTURE' => 'Настройки для картинок анонса элементов',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_ALT' => 'Шаблон ALT',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_TITLE' => 'Шаблон TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_NAME' => 'Шаблон имени файла',
    'IPROPERTY_TEMPLATES_ELEMENTS_DETAIL_PICTURE' => 'Настройки для детальных картинок элементов',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_ALT' => 'Шаблон ALT',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_TITLE' => 'Шаблон TITLE',
    'IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_NAME' => 'Шаблон имени файла',
    'SEO_ADDITIONAL' => 'Дополнительно',
    'TAGS' => 'Теги',
  ),
  'Разделы|edit2' => 
  array (
    'SECTIONS' => 'Разделы',
  ),
  'Торговый каталог|edit10' => 
  array (
    'CATALOG' => 'Торговый каталог',
  ),
  'Файлы|cedit2' => 
  array (
    'PROPERTY_M_DOCS' => 'Документация',
    'PROPERTY_M_SERT' => 'Сертификаты',
    'PROPERTY_M_DRIVERS' => 'Драйвера',
  ),
));
    $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => 'CATALOG_TYPE',
        1 => 'NAME',
        2 => 'ACTIVE',
        3 => 'SORT',
        4 => 'TIMESTAMP_X',
        5 => 'ID',
        6 => 'PROPERTY_NEW',
        7 => 'CATALOG_AVAILABLE',
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
      'custom_names' => NULL,
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
