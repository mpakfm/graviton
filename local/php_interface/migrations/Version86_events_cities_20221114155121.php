<?php

namespace Sprint\Migration;


class Version86_events_cities_20221114155121 extends Version
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
        $iblockId = $helper->Iblock()->getIblockIdIfExists('events', 'content');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Город',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'CITY',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'E',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => 'references:city',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'Y',
  'VERSION' => '2',
  'USER_TYPE' => 'EAutocomplete',
  'USER_TYPE_SETTINGS' => 
  array (
    'VIEW' => 'E',
    'SHOW_ADD' => 'N',
    'MAX_WIDTH' => 0,
    'MIN_HEIGHT' => 24,
    'MAX_HEIGHT' => 1000,
    'BAN_SYM' => ',;',
    'REP_SYM' => ' ',
    'OTHER_REP_SYM' => '',
    'IBLOCK_MESS' => 'N',
  ),
  'HINT' => '',
));
    
    }

    public function down()
    {
        //your code ...
    }
}
