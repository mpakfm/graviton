<?php

namespace Sprint\Migration;


class Version115_rus_systems20221123235022 extends Version
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
        $iblockId = $helper->Iblock()->getIblockIdIfExists('product', 'catalog');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Системы на российских ЦПУ',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'RUS',
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
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'YES',
    ),
  ),
));
    
    }

    public function down()
    {
        //your code ...
    }
}
