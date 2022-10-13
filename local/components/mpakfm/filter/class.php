<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    13.10.2022
 * Time:    22:40
 */

use Bitrix\Main\Application;
use Library\Tools\CacheSelector;

class Filter extends \CBitrixComponent
{
    public function onPrepareComponentParams($params): array
    {
        $params = parent::onPrepareComponentParams($params);

        //$keyCrc = abs(crc32($htmlKey));
        $params['FACET_ID'] = [];

        foreach ($_REQUEST as $field => $value) {
            //arrFilter_56=1904655245
            $parts = explode('_', $field);
            if (!array_key_exists(1, $parts)) {
                continue;
            }
            $params['FACET_ID'][] = $parts[1] * 2;
        }

        return $params;
    }

    public function getData()
    {
        $iblockId = CacheSelector::getIblockId('product', 'catalog');
        $strFacet = implode(',', $this->arParams['FACET_ID']);

        $con = Application::getConnection();
        $sql = "select f.ELEMENT_ID
FROM b_iblock_6_index f
inner join b_iblock_element el ON el.ID = f.ELEMENT_ID
inner join b_iblock_section s ON s.ID = f.SECTION_ID
WHERE f.FACET_ID IN ({$strFacet}) AND f.INCLUDE_SUBSECTIONS = 1
ORDER BY f.ELEMENT_ID ASC";

        $stmt = $con->query($sql);
        $productIds = [];
        while($item = $stmt->fetch()) {
            $productIds[] = $item['ELEMENT_ID'];
        }

        $filter = [
            'IBLOCK_ID' => $iblockId,
            'ACTIVE'    => 'Y',
            'ID'        => $productIds,
        ];
        $select = ['ID', 'NAME', 'CODE', 'PREVIEW_PICTURE','PREVIEW_TEXT' ,'PROPERTY_SUBTITLE', 'DETAIL_PAGE_URL'];
        $stmt   = CIBlockElement::GetList(['sort' => 'asc'], $filter, false, false, $select);

        $imageIds = [];

        $this->arResult['ITEMS'] = [];
        $this->arResult['FILES'] = [];
        while($el = $stmt->Fetch()) {
            if ((int) $el['PREVIEW_PICTURE']) {
                $imageIds[] = $el['PREVIEW_PICTURE'];
            }
            $stmtSection = CIBlockSection::GetNavChain(0, $el["IBLOCK_SECTION_ID"], array("ID", "IBLOCK_SECTION_ID", "CODE"));
            $SECTION_CODE_PATH = '';
            while ($sect = $stmtSection->Fetch()) {
                $SECTION_CODE_PATH .= urlencode($sect["CODE"]) . "/";
            }
            $el['SECTION_CODE_PATH'] = rtrim($SECTION_CODE_PATH, "/");
            $el['URL'] = '/catalog/' . $el['SECTION_CODE_PATH'] . '/' . $el['CODE'];
            $this->arResult['ITEMS'][] = $el;
        }

        $stmt = CFile::GetList([], ['@ID' => $imageIds]);
        while($file = $stmt->Fetch()) {
            $src = CFile::GetFileSRC($file);
            $file['SRC'] = $src;
            $this->arResult['FILES'][$file['ID']] = $file;
        }
    }

    public function executeComponent()
    {
        $template = 'template';
        if (isset($this->arParams['TEMPLATE']) && $this->arParams['TEMPLATE'] != '') {
            $template = str_replace('.php', '', $this->arParams['TEMPLATE']);
        }
        if (!empty($this->arParams['FACET_ID'])) {
            $this->getData();
        }

        $this->includeComponentTemplate($template);
    }
}
