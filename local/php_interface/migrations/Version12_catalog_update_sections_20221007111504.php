<?php

namespace Sprint\Migration;


class Version12_catalog_update_sections_20221007111504 extends Version
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
    'DESCRIPTION' => '<p class="s-solutions__text">Сегодня на рынке представлены три основных вида ноутбуков — это настольные, ультратонкие и ноутбуки-трансформеры. Все они заточены под выполнение разных задач, поэтому покупателю стоит быть внимательнее. Например, трансформеры чаще всего поставляются с сенсорным экраном, поэтому управлять ими можно и пальцами, и с помощью обычной клавиатуры. Чаще всего они работают на операционной системе Windows 10, однако могут иметь и две ОС: например, Windows и Android. А ультрабуки отличаются минимальной толщиной и легкостью — они весят до полутора килограммов, их можно легко взять с собой, но они не отличаются высокой производительностью.</p>
<p class="s-solutions__text">Поэтому для начала пользователю важно определить, для каких задач подойдет та или иная модель ноутбука и каким набором технических характеристик должно в итоге обладать устройство.</p>
<p class="s-solutions__text--last">Сегодня на рынке представлены три основных вида ноутбуков — это настольные, ультратонкие и ноутбуки-трансформеры. Все они заточены под выполнение разных задач, поэтому покупателю стоит быть внимательнее. Например, трансформеры чаще всего поставляются с сенсорным экраном, поэтому управлять ими можно и пальцами, и с помощью обычной клавиатуры. Чаще всего они работают на операционной системе Windows 10, однако могут иметь и две ОС: например, Windows и Android. А ультрабуки отличаются минимальной толщиной и легкостью — они весят до полутора килограммов, их можно легко взять с собой, но они не отличаются высокой производительностью.</p>
<div class="s-solutions__text--short">
    <p class="s-solutions__text">Тут будет текст</p>
    <p class="s-solutions__text">Тут будет текст</p>
    <p class="s-solutions__text">Тут будет текст</p>
</div>',
    'DESCRIPTION_TYPE' => 'html',
    'UF_ADVERT' => 'Эталон российских настольных&nbsp;систем',
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => 'эталон',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Ноутбуки',
        'CODE' => 'laptops',
        'SORT' => '100',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '<p class="s-goods__text--prefix">Многочисленные порты ввода‑вывода. Три полноразмерных USB 3.2, полноразмерный HDMI 1.4, VGA, USB-C с поддержкой передачи видеосигнала и подзарядки, гигабитный Ethernet, разъем для наушников и кард-ридер.</p>
<p class="s-goods__text--prefix">По USB-C очень даже можно, там ограничение 4096х2364 точек с частотой обновления 60 Гц. И, кстати, с внешним монитором</p>',
        'DESCRIPTION_TYPE' => 'html',
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => 'Ноутбуки пластиковые',
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линейка 1',
            'CODE' => 'laptop-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '<p class="s-goods__text--prefix">Многочисленные порты ввода‑вывода. Три полноразмерных USB 3.2, полноразмерный HDMI 1.4, VGA, USB-C с поддержкой передачи видеосигнала и подзарядки, гигабитный Ethernet, разъем для наушников и кард-ридер.</p>
<p class="s-goods__text--prefix">По USB-C очень даже можно, там ограничение 4096х2364 точек с частотой обновления 60 Гц. И, кстати, с внешним монитором</p>',
            'DESCRIPTION_TYPE' => 'html',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => 'Ноутбуки пластиковые',
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Линейка 2',
            'CODE' => 'laptop-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => 'Ноутбуки пластиковые два',
            'UF_LOGO' => NULL,
          ),
          2 => 
          array (
            'NAME' => 'Линейка 3',
            'CODE' => 'laptop-line3',
            'SORT' => '300',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          3 => 
          array (
            'NAME' => 'Линейка 4',
            'CODE' => 'laptop-line4',
            'SORT' => '400',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => 'Высокая производительность в эргономичном исполнении',
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линейка 1',
            'CODE' => 'monoblock-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Линейка 2',
            'CODE' => 'monoblock-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          2 => 
          array (
            'NAME' => 'Линейка 3',
            'CODE' => 'monoblock-line3',
            'SORT' => '300',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          3 => 
          array (
            'NAME' => 'Линейка 4',
            'CODE' => 'monoblock-line4',
            'SORT' => '400',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линейка 1',
            'CODE' => 'desktop-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Линейка 2',
            'CODE' => 'desktop-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          2 => 
          array (
            'NAME' => 'Линейка 3',
            'CODE' => 'desktop-line3',
            'SORT' => '300',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          3 => 
          array (
            'NAME' => 'Линейка 4',
            'CODE' => 'desktop-line4',
            'SORT' => '400',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
    'UF_ADVERT' => 'Эталон российских&nbsp;систем',
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => 'эталон',
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Первая Линия ',
            'CODE' => 'server-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => 'Ноутбуки железные',
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Вторая Линия',
            'CODE' => 'server-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
      ),
    ),
  ),
  2 => 
  array (
    'NAME' => 'Материнские платы',
    'CODE' => 'motherboards',
    'SORT' => '300',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_ADVERT' => NULL,
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => NULL,
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линия 1',
            'CODE' => 'mb-server-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Линия 2',
            'CODE' => 'mb-server-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линейка 1',
            'CODE' => 'mb-laptop-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          1 => 
          array (
            'NAME' => 'Линейка 2',
            'CODE' => 'mb-laptop-line2',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
          2 => 
          array (
            'NAME' => 'Линейка 3',
            'CODE' => 'mb-laptop-line3',
            'SORT' => '300',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'NAME' => 'Системы на российских ЦПУ',
    'CODE' => 'systems_on_russian_cpus',
    'SORT' => '400',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_ADVERT' => NULL,
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => NULL,
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
        'CHILDS' => 
        array (
          0 => 
          array (
            'NAME' => 'Линия 1',
            'CODE' => 'rus-server-line1',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_ADVERT' => NULL,
            'UF_SUBTITLE' => NULL,
            'UF_LOGO' => NULL,
          ),
        ),
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
        'UF_ADVERT' => NULL,
        'UF_SUBTITLE' => NULL,
        'UF_LOGO' => NULL,
      ),
    ),
  ),
  4 => 
  array (
    'NAME' => 'Программное обеспечение',
    'CODE' => 'programm',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_ADVERT' => NULL,
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => NULL,
  ),
  5 => 
  array (
    'NAME' => 'Сетевые технологии',
    'CODE' => 'network',
    'SORT' => '600',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_ADVERT' => NULL,
    'UF_SUBTITLE' => NULL,
    'UF_LOGO' => NULL,
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
