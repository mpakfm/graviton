<?php

namespace Sprint\Migration;


class Version3_catalog_sections_20220917224340 extends Version
{
    protected $description = "Каталог разделы";

    protected $moduleVersion = "4.1.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'product',
            'catalog'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Клиентские решения',
    'CODE' => 'client_solutions',
    'SORT' => '100',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_SUBTITLE' => NULL,
    'UF_RAM' => NULL,
    'UF_HDD' => NULL,
    'UF_CPU' => NULL,
    'UF_SCREEN' => NULL,
    'UF_SLIDER_BACK' => NULL,
    'UF_SLIDER_PIC' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Ноутбуки',
        'CODE' => 'laptops',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => 'Созданы для крупный предприятий и государственных организаций',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => 'Сверхлегкие и производительные ноутбуки',
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Моноблоки',
        'CODE' => 'monoblocks',
        'SORT' => '200',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => 'Идеальное решение для создание автоматизированного рабочего места',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => 'Высокая производительность в эргономичном исполнении',
        'UF_RAM' => 'до 64ГБайт',
        'UF_HDD' => 'До двух накопителей 2,5" HDD/SSD SATA',
        'UF_CPU' => 'Intel® Core™ 8 и 9 поколений',
        'UF_SCREEN' => '23,8-дюймовый IPS FHD',
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
      2 => 
      array (
        'NAME' => 'Настольные ПК',
        'CODE' => 'desktop',
        'SORT' => '300',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
    ),
  ),
  1 => 
  array (
    'NAME' => 'Серверные решения',
    'CODE' => 'server_solutions',
    'SORT' => '200',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_SUBTITLE' => NULL,
    'UF_RAM' => NULL,
    'UF_HDD' => NULL,
    'UF_CPU' => NULL,
    'UF_SCREEN' => NULL,
    'UF_SLIDER_BACK' => NULL,
    'UF_SLIDER_PIC' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Серверы',
        'CODE' => 'servers',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Системы хранения данных',
        'CODE' => 'storage_systems',
        'SORT' => '200',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
    ),
  ),
  2 => 
  array (
    'NAME' => 'Материнские платы',
    'CODE' => 'motherboards',
    'SORT' => '400',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_SUBTITLE' => NULL,
    'UF_RAM' => NULL,
    'UF_HDD' => NULL,
    'UF_CPU' => NULL,
    'UF_SCREEN' => NULL,
    'UF_SLIDER_BACK' => NULL,
    'UF_SLIDER_PIC' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Для серверов',
        'CODE' => 'm_servers',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Для ПК',
        'CODE' => 'm_laptop',
        'SORT' => '200',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
    ),
  ),
  3 => 
  array (
    'NAME' => 'Системы на российских ЦПУ',
    'CODE' => 'systems_on_russian_cpus',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_SUBTITLE' => NULL,
    'UF_RAM' => NULL,
    'UF_HDD' => NULL,
    'UF_CPU' => NULL,
    'UF_SCREEN' => NULL,
    'UF_SLIDER_BACK' => NULL,
    'UF_SLIDER_PIC' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Сервер',
        'CODE' => 'r_server',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Моноблок',
        'CODE' => 'r_monoblock',
        'SORT' => '200',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_SUBTITLE' => NULL,
        'UF_RAM' => NULL,
        'UF_HDD' => NULL,
        'UF_CPU' => NULL,
        'UF_SCREEN' => NULL,
        'UF_SLIDER_BACK' => NULL,
        'UF_SLIDER_PIC' => NULL,
      ),
    ),
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
