<?php

namespace Sprint\Migration;


class Version55_section_cities_20221113174412 extends Version
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
            'city',
            'references'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Сибирский',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Хакасия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Тыва',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Алтайский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Иркутская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Кемеровская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Красноярский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Томская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Бурятия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      8 => 
      array (
        'NAME' => 'Забайкальский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      9 => 
      array (
        'NAME' => 'Новосибирская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      10 => 
      array (
        'NAME' => 'Алтай',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      11 => 
      array (
        'NAME' => 'Омская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  1 => 
  array (
    'NAME' => 'Приволжский',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Оренбургская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Башкортостан',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Татарстан',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Чувашия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Пермский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Мордовия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Нижегородская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Саратовская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      8 => 
      array (
        'NAME' => 'Ульяновская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      9 => 
      array (
        'NAME' => 'Кировская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      10 => 
      array (
        'NAME' => 'Пензенская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      11 => 
      array (
        'NAME' => 'Марий Эл',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      12 => 
      array (
        'NAME' => 'Удмуртия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      13 => 
      array (
        'NAME' => 'Самарская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  2 => 
  array (
    'NAME' => 'Южный',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Краснодарский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Адыгея',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Ростовская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Крым',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Астраханская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Волгоградская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Калмыкия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Севастополь',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  3 => 
  array (
    'NAME' => 'Северо-Кавказский',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Северная Осетия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Чечня',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Кабардино-Балкария',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Ставропольский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Дагестан',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Ингушетия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Карачаево-Черкесия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  4 => 
  array (
    'NAME' => 'Уральский',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Свердловская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Челябинская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Ханты-Мансийский АО',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Ямало-Ненецкий АО',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Курганская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Тюменская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Ханты-Мансийский АО — Югра',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  5 => 
  array (
    'NAME' => 'Дальневосточный',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Якутия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Сахалинская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Хабаровский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Чукотский АО',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Приморский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Амурская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Еврейская АО',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Камчатский край',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      8 => 
      array (
        'NAME' => 'Магаданская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  6 => 
  array (
    'NAME' => 'Центральный',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Владимирская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Белгородская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Тульская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Тверская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Московская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Калужская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Воронежская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Орловская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      8 => 
      array (
        'NAME' => 'Брянская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      9 => 
      array (
        'NAME' => 'Костромская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      10 => 
      array (
        'NAME' => 'Смоленская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      11 => 
      array (
        'NAME' => 'Ивановская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      12 => 
      array (
        'NAME' => 'Ярославская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      13 => 
      array (
        'NAME' => 'Липецкая область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      14 => 
      array (
        'NAME' => 'Курская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      15 => 
      array (
        'NAME' => 'Тамбовская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      16 => 
      array (
        'NAME' => 'Рязанская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      17 => 
      array (
        'NAME' => 'Москва',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
    ),
  ),
  7 => 
  array (
    'NAME' => 'Северо-Западный',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => NULL,
    'DESCRIPTION_TYPE' => 'text',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Мурманская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      1 => 
      array (
        'NAME' => 'Архангельская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      2 => 
      array (
        'NAME' => 'Вологодская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      3 => 
      array (
        'NAME' => 'Калининградская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      4 => 
      array (
        'NAME' => 'Карелия',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      5 => 
      array (
        'NAME' => 'Ленинградская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      6 => 
      array (
        'NAME' => 'Новгородская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      7 => 
      array (
        'NAME' => 'Псковская область',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      8 => 
      array (
        'NAME' => 'Коми',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      9 => 
      array (
        'NAME' => 'Ненецкий АО',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
      ),
      10 => 
      array (
        'NAME' => 'Санкт-Петербург',
        'CODE' => NULL,
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => NULL,
        'DESCRIPTION_TYPE' => 'text',
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
