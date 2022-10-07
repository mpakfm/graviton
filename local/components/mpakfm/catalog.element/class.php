<?
use Bitrix\Main,
	Bitrix\Main\Loader,
	Bitrix\Iblock\Component\Element,
	Bitrix\Main\Localization\Loc,
	Bitrix\Catalog;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Loc::loadMessages(__FILE__);

if (!\Bitrix\Main\Loader::includeModule('iblock'))
{
	ShowError(Loc::getMessage('IBLOCK_MODULE_NOT_INSTALLED'));
	return;
}

class CatalogElementComponent extends Element
{
        /**
         * @return int|false
         */
        public function executeComponent()
        {
            $this->checkModules();

            if ($this->hasErrors())
            {
                return $this->processErrors();
            }

            $action = $this->prepareAction();
            $this->setAction($action);
            $this->doAction();

            if ($this->hasErrors())
            {
                return $this->processErrors();
            }

            return $this->arResult['ID'] ?? false;
        }

        /**
         * Return \CIBlockResult iterator for current iblock ID.
         *
         * @param int $iblockId
         * @param array|int $products
         * @return \CIBlockResult|int
         */
        protected function getElementList($iblockId, $products)
        {
            $selectFields = $this->getIblockSelectFields($iblockId);

            $filterFields = $this->filterFields;
            if ($iblockId > 0)
            {
                $filterFields['IBLOCK_ID'] = $iblockId;
            }
            if (!empty($products))
            {
                $filterFields['ID'] = $products;
            }

            $globalFilter = [];
            if (!empty($this->globalFilter))
                $globalFilter = $this->convertFilter($this->globalFilter);

            $iteratorParams = [
                'select' => $selectFields,
                'filter' => array_merge($globalFilter, $filterFields),
                'order' => $this->sortFields,
                'navigation' => $this->navParams
            ];
            if ($this->isSeparateLoading() && $iblockId > 0)
            {
                $elementIterator = $this->getSeparateList($iteratorParams);
            }
            else
            {
                $elementIterator = $this->getFullIterator($iteratorParams);
            }
            unset($iteratorParams);

            $elementIterator->SetUrlTemplates($this->arParams['DETAIL_URL']);

            return $elementIterator;
        }
    /**
     * Return array map of iblock products.

     * 3 following cases to process $productIdMap:
     * ~ $productIdMap is array with ids	- show elements with presented ids
     * ~ $productIdMap is empty array		- nothing to show
     * ~ $productIdMap === false				- show elements via filter(e.g. $arParams['IBLOCK_ID'],  arParams['ELEMENT_ID'])
     *
     * @return array
     */
    protected function getProductsSeparatedByIblock()
    {
        $iblockItems = array();

        if (!empty($this->productIdMap) && is_array($this->productIdMap))
        {
            $itemsIterator = \Bitrix\Iblock\ElementTable::getList(array(
                'select' => array('ID', 'IBLOCK_ID'),
                'filter' => array('@ID' => $this->productIdMap)
            ));
            while ($item = $itemsIterator->fetch())
            {
                $item['ID'] = (int)$item['ID'];
                $item['IBLOCK_ID'] = (int)$item['IBLOCK_ID'];

                if (!isset($iblockItems[$item['IBLOCK_ID']]))
                {
                    $iblockItems[$item['IBLOCK_ID']] = array();
                }

                $iblockItems[$item['IBLOCK_ID']][] = $item['ID'];
            }
            unset($item, $itemsIterator);
        }
        elseif ($this->productIdMap === false && $this->arParams['ELEMENT_ID'])
        {
            $iblockItems[$this->arParams['IBLOCK_ID']] = $this->arParams['ELEMENT_ID'] ?? 0;
        } elseif ($this->arParams['ELEMENT_CODE']) {
            $filter = [
                'ACTIVE'    => 'Y',
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'CODE'      => $this->arParams['ELEMENT_CODE']
            ];
            $el = CIBlockElement::GetList([], $filter, false, false, ['ID'])->Fetch();
            $iblockItems[$this->arParams['IBLOCK_ID']] = ($el ? $el['ID'] : 0);
        } else {
            $iblockItems[$this->arParams['IBLOCK_ID']] = 0;
        }

        return $iblockItems;
    }

        /**
         * Check by ID if element is correct.
         *
         * @return bool
         */
        protected function checkElementId()
        {
            if ($this->arParams['ELEMENT_ID'] <= 0)
            {
                $findFilter = array(
                    'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                    'IBLOCK_LID' => $this->getSiteId(),
                    'ACTIVE_DATE' => 'Y',
                    'CHECK_PERMISSIONS' => 'Y',
                    'MIN_PERMISSION' => 'R',
                );

                if ($this->arParams['SHOW_DEACTIVATED'] !== 'Y')
                {
                    $findFilter['ACTIVE'] = 'Y';
                }

                $this->arParams['ELEMENT_ID'] = \CIBlockFindTools::GetElementID(
                    $this->arParams['ELEMENT_ID'],
                    $this->arParams['~ELEMENT_CODE'],
                    $this->arParams['STRICT_SECTION_CHECK']? $this->arParams['SECTION_ID']: 0,
                    $this->arParams['STRICT_SECTION_CHECK']? $this->arParams['~SECTION_CODE']: '',
                    $findFilter
                );
            }

            return $this->arParams['ELEMENT_ID'] > 0;
        }
	public function __construct($component = null)
	{
		parent::__construct($component);
		$this->setExtendedMode(false);
	}

	/**
	 * Processing parameters unique to catalog.element component.
	 *
	 * @param array $params		Component parameters.
	 * @return array
	 */
	public function onPrepareComponentParams($params)
	{
		$params = parent::onPrepareComponentParams($params);

		$params['COMPATIBLE_MODE'] = (isset($params['COMPATIBLE_MODE']) && $params['COMPATIBLE_MODE'] === 'N' ? 'N' : 'Y');
		if ($params['COMPATIBLE_MODE'] === 'N')
		{
			$params['SET_VIEWED_IN_COMPONENT'] = 'N';
			$params['DISABLE_INIT_JS_IN_COMPONENT'] = 'Y';
			$params['OFFERS_LIMIT'] = 0;
		}

		$this->setCompatibleMode($params['COMPATIBLE_MODE'] === 'Y');

		$params['SET_VIEWED_IN_COMPONENT'] = isset($params['SET_VIEWED_IN_COMPONENT']) && $params['SET_VIEWED_IN_COMPONENT'] === 'Y' ? 'Y' : 'N';

		$params['DISABLE_INIT_JS_IN_COMPONENT'] = isset($params['DISABLE_INIT_JS_IN_COMPONENT']) && $params['DISABLE_INIT_JS_IN_COMPONENT'] === 'Y' ? 'Y' : 'N';
		if ($params['DISABLE_INIT_JS_IN_COMPONENT'] !== 'Y')
		{
			\CJSCore::Init(array('popup'));
		}

		return $params;
	}

	/**
	 * Fill additional keys for component cache.
	 *
	 * @param array &$resultCacheKeys		Cached result keys.
	 * @return void
	 */
	protected function initAdditionalCacheKeys(&$resultCacheKeys)
	{
		parent::initAdditionalCacheKeys($resultCacheKeys);

		if (
			$this->useCatalog
			&& !empty($this->storage['CATALOGS'][$this->arParams['IBLOCK_ID']])
			&& is_array($this->storage['CATALOGS'][$this->arParams['IBLOCK_ID']])
		)
		{
			$element =& $this->elements[0];

			// catalog hit stats
			$productTitle = !empty($element['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
				? $element['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
				: $element['NAME'];

			$categoryId = '';
			$categoryPath = array();

			if (isset($element['SECTION']['ID']))
			{
				$categoryId = $element['SECTION']['ID'];
			}

			if (isset($element['SECTION']['PATH']))
			{
				foreach ($element['SECTION']['PATH'] as $cat)
				{
					$categoryPath[$cat['ID']] = $cat['NAME'];
				}
			}

			$this->arResult['CATEGORY_PATH'] = implode('/', $categoryPath);

			$counterData = array(
				'product_id' => $element['ID'],
				'iblock_id' => $this->arParams['IBLOCK_ID'],
				'product_title' => $productTitle,
				'category_id' => $categoryId,
				'category' => $categoryPath
			);

			if (empty($element['OFFERS']))
			{
				$priceProductId = $element['ID'];
			}
			else
			{
				$offer = reset($element['OFFERS']);
				$priceProductId = $offer['ID'];
				unset($offer);
			}

			// price for anonymous
			if ($this->useDiscountCache)
			{
				if ($this->storage['USE_SALE_DISCOUNTS'])
				{
					$priceTypes = array();
					$priceIterator = Catalog\GroupAccessTable::getList(array(
						'select' => array('CATALOG_GROUP_ID'),
						'filter' => array('GROUP_ID' => 2, '=ACCESS' => Catalog\GroupAccessTable::ACCESS_BUY),
						'order' => array('CATALOG_GROUP_ID' => 'ASC')
					));
					while ($priceType = $priceIterator->fetch())
					{
						$priceTypeId = (int)$priceType['CATALOG_GROUP_ID'];
						$priceTypes[$priceTypeId] = $priceTypeId;
						unset($priceTypeId);
					}
					Catalog\Discount\DiscountManager::preloadPriceData(array($priceProductId), $priceTypes);
					Catalog\Product\Price::loadRoundRules($priceTypes);
				}
			}
			$optimalPrice = \CCatalogProduct::GetOptimalPrice($priceProductId, 1, array(2), 'N', array(), $this->getSiteId(), array());
			$counterData['price'] = $optimalPrice['RESULT_PRICE']['DISCOUNT_PRICE'];
			$counterData['currency'] = $optimalPrice['RESULT_PRICE']['CURRENCY'];

			// make sure it is in utf8
			$counterData = Main\Text\Encoding::convertEncoding($counterData, SITE_CHARSET, 'UTF-8');

			// pack value and protocol version
			$rcmLogCookieName = Main\Config\Option::get('main', 'cookie_name', 'BITRIX_SM') . '_' . Main\Analytics\Catalog::getCookieLogName();

			$this->arResult['counterData'] = array(
				'item' => base64_encode(json_encode($counterData)),
				'user_id' => new Main\Text\JsExpression(
					'function(){return BX.message("USER_ID") ? BX.message("USER_ID") : 0;}'
				),
				'recommendation' => new Main\Text\JsExpression(
					'function() {
							var rcmId = "";
							var cookieValue = BX.getCookie("' . $rcmLogCookieName . '");
							var productId = ' . $element["ID"] . ';
							var cItems = [];
							var cItem;

							if (cookieValue)
							{
								cItems = cookieValue.split(".");
							}

							var i = cItems.length;
							while (i--)
							{
								cItem = cItems[i].split("-");
								if (cItem[0] == productId)
								{
									rcmId = cItem[1];
									break;
								}
							}

							return rcmId;
						}'
				),
				'v' => '2'
			);
			$resultCacheKeys[] = 'counterData';

			if ($this->arParams['SET_VIEWED_IN_COMPONENT'] === 'Y')
			{
				$viewedProduct = array(
					'PRODUCT_ID' => $element['ID'],
					'OFFER_ID' => $element['ID']
				);

				if (!empty($element['OFFERS']))
				{
					$viewedProduct['OFFER_ID'] = $element['OFFER_ID_SELECTED'] > 0
						? $element['OFFER_ID_SELECTED']
						: $element['OFFERS'][0]['ID'];
				}

				$this->arResult['VIEWED_PRODUCT'] = $viewedProduct;
				$resultCacheKeys[] = 'VIEWED_PRODUCT';
				unset($viewedProduct);
			}
			unset($element);
		}
	}

	/**
	 * Save compatible viewed product in catalog.element only.
	 *
	 * @return void
	 */
	protected function saveViewedProduct()
	{
		if ($this->isEnableCompatible())
		{
			if ((string)Main\Config\Option::get('sale', 'product_viewed_save') === 'Y')
			{
				if (
					!isset($_SESSION['VIEWED_ENABLE'])
					&& isset($_SESSION['VIEWED_PRODUCT'])
					&& $_SESSION['VIEWED_PRODUCT'] != $this->arResult['ID']
					&& Loader::includeModule('sale')
				)
				{
					$_SESSION['VIEWED_ENABLE'] = 'Y';
					$fields = array(
						'PRODUCT_ID' => (int)$_SESSION['VIEWED_PRODUCT'],
						'MODULE' => 'catalog',
						'LID' => $this->getSiteId()
					);
					/** @noinspection PhpDeprecationInspection */
					\CSaleViewedProduct::Add($fields);
				}

				if (
					isset($_SESSION['VIEWED_ENABLE'])
					&& $_SESSION['VIEWED_ENABLE'] === 'Y'
					&& $_SESSION['VIEWED_PRODUCT'] != $this->arResult['ID']
					&& Loader::includeModule('sale')
				)
				{
					$fields = array(
						'PRODUCT_ID' => $this->arResult['ID'],
						'MODULE' => 'catalog',
						'LID' => $this->getSiteId(),
						'IBLOCK_ID' => $this->arResult['IBLOCK_ID']
					);
					/** @noinspection PhpDeprecationInspection */
					\CSaleViewedProduct::Add($fields);
				}

				$_SESSION['VIEWED_PRODUCT'] = $this->arResult['ID'];
			}

			if ($this->arParams['SET_VIEWED_IN_COMPONENT'] === 'Y' && !empty($this->arResult['VIEWED_PRODUCT']))
			{
				if (Loader::includeModule('catalog') && Loader::includeModule('sale'))
				{
					if ((string)Main\Config\Option::get('catalog', 'enable_viewed_products') !== 'N')
					{
						Catalog\CatalogViewedProductTable::refresh(
							$this->arResult['VIEWED_PRODUCT']['OFFER_ID'],
							\CSaleBasket::GetBasketUserID(),
							$this->getSiteId(),
							$this->arResult['VIEWED_PRODUCT']['PRODUCT_ID']
						);
					}
				}
			}
		}
	}

	/**
	 * Save bigdata analytics for catalog.element only.
	 *
	 * @return void
	 */
	protected function sendCounters()
	{
		parent::sendCounters();
		if (isset($this->arResult['counterData']) && Main\Analytics\Catalog::isOn())
		{
			Main\Analytics\Counter::sendData('ct', $this->arResult['counterData']);
		}
	}
}
