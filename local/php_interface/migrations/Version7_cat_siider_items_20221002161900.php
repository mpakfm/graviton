<?php

namespace Sprint\Migration;


class Version7_cat_siider_items_20221002161900 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.1.1";

    /**
     * @throws Exceptions\ExchangeException
     * @throws Exceptions\RestartException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
            ->IblockElementsImport()
            ->setExchangeResource('iblock_elements.xml')
            ->setLimit(20)
            ->execute(function ($item) {
                $this->getHelperManager()
                    ->Iblock()
                    ->addElement(
                        $item['iblock_id'],
                        $item['fields'],
                        $item['properties']
                    );
            });
    }

    public function down()
    {
        //your code ...
    }
}
