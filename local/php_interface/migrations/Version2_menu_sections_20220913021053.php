<?php

namespace Sprint\Migration;


class Version2_menu_sections_20220913021053 extends Version
{
    protected $description = "Меню, разделы";

    protected $moduleVersion = "4.1.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'menu',
            'content'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Меню в шапке',
    'CODE' => 'header',
    'SORT' => '100',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_LINK' => NULL,
    'UF_BLANK' => NULL,
  ),
  1 => 
  array (
    'NAME' => 'Меню в подвале большое',
    'CODE' => 'footer',
    'SORT' => '200',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_LINK' => NULL,
    'UF_BLANK' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Продукты',
        'CODE' => '',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      1 => 
      array (
        'NAME' => 'Поддержка',
        'CODE' => '',
        'SORT' => '200',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      2 => 
      array (
        'NAME' => 'О компании',
        'CODE' => '',
        'SORT' => '300',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => '/page/about',
        'UF_BLANK' => '0',
      ),
      3 => 
      array (
        'NAME' => 'Услуги',
        'CODE' => '',
        'SORT' => '400',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      4 => 
      array (
        'NAME' => 'Кейсы',
        'CODE' => '',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      5 => 
      array (
        'NAME' => 'Партнёры',
        'CODE' => '',
        'SORT' => '600',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      6 => 
      array (
        'NAME' => 'Документация',
        'CODE' => '',
        'SORT' => '700',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
      7 => 
      array (
        'NAME' => 'Контакты',
        'CODE' => '',
        'SORT' => '800',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_LINK' => NULL,
        'UF_BLANK' => '0',
      ),
    ),
  ),
  2 => 
  array (
    'NAME' => 'Меню у копирайта',
    'CODE' => 'copyright',
    'SORT' => '300',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_LINK' => NULL,
    'UF_BLANK' => NULL,
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
