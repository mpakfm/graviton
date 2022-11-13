<?php
$arUrlRewrite=array (
    array (
        'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
        'RULE'      => 'componentName=$1',
        'ID'        => NULL,
        'PATH'      => '/bitrix/services/mobileapp/jn.php',
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => '#^/bitrix/services/ymarket/#',
        'RULE'      => '',
        'ID'        => '',
        'PATH'      => '/bitrix/services/ymarket/index.php',
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => '#^/stssync/calendar/#',
        'RULE'      => '',
        'ID'        => 'bitrix:stssync.server',
        'PATH'      => '/bitrix/services/stssync/calendar/index.php',
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => '#^/rest/#',
        'RULE'      => '',
        'ID'        => NULL,
        'PATH'      => '/bitrix/services/rest/index.php',
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/search(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "TYPE=$2&CODE=$4&OTHER=$5",
        'ID'        => "",
        'PATH'      => "/local/pages/search.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/catalog(.*)?#",
        'RULE'      => "",
        'ID'        => "",
        'PATH'      => "/local/pages/main_catalog.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/news(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "SECTION=$2&ITEM=$4&OTHER=$5",
        'ID'        => "",
        'PATH'      => "/local/pages/news.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/events(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "CODE=$2&OTHER=$3",
        'ID'        => "",
        'PATH'      => "/local/pages/events.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/cases(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "SECTION=$2&ITEM=$4&OTHER=$5",
        'ID'        => "",
        'PATH'      => "/local/pages/cases.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/partners(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "CODE=$1&OTHER=$2",
        'ID'        => "",
        'PATH'      => "/local/pages/partners.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/support/servisnye-tsentry/?(\?.*)?#",
        'RULE'      => "SECTION=\$2&CODE=\$4&PARAMS=\$5",//SECTION=$2&ITEM=$4&OTHER=$5
        'ID'        => "",
        'PATH'      => "/local/pages/service.center.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/support/garantiynye-usloviya/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.usloviya.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/support/yuridicheskaya-podderzhka/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.legal.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/support/zagruzka-drayverov(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "SECTION=\$2&ID=\$4&PARAMS=\$5",
        'ID'        => "",
        'PATH'      => "/local/pages/service.drivers.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/support/zagruzka-drayverov/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.drivers.php",
        'SORT'      => 100,
    ),
    // /page/services/kontraktnaya-razrabotka
    array (
        'CONDITION' => "#^/page/services/kontraktnaya-razrabotka/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.odm.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/services/oem/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.oem.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/services/?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/service.odm.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/about(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "SECTION=\$2&ID=\$4&PARAMS=\$5",
        'ID'        => "",
        'PATH'      => "/local/pages/about.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page/about?(\?.*)?#",
        'RULE'      => "PARAMS=\$1",
        'ID'        => "",
        'PATH'      => "/local/pages/about.php",
        'SORT'      => 100,
    ),
    array (
        'CONDITION' => "#^/page(/([a-zA-Z0-9_\-]+)?)?(/([a-zA-Z0-9_\-]+)?)?(\?.*)?#",
        'RULE'      => "SECTION=\$2&CODE=\$4&PARAMS=\$5",//SECTION=$2&ITEM=$4&OTHER=$5
        'ID'        => "bitrix:news.detail",
        'PATH'      => "/local/pages/one.page.php",
        'SORT'      => 100,
    ),
    array(
        'CONDITION' => '#^/contacts(/)?#',
        'RULE'      => '',
        'ID'        => null,
        'PATH'      => '/local/pages/contacts.php',
        'SORT'      => 200,
    ),
    array(
        'CONDITION' => '#^/admin-docs(/)?#',
        'RULE'      => '',
        'ID'        => null,
        'PATH'      => '/local/pages/admin_docs.php',
        'SORT'      => 200,
    ),
    array(
        'CONDITION' => '#^/error(/)?#',
        'RULE'      => '',
        'ID'        => null,
        'PATH'      => '/local/pages/error.php',
        'SORT'      => 200,
    ),
    array(
        'CONDITION' => '#^/temp(/)?#',
        'RULE'      => '',
        'ID'        => null,
        'PATH'      => '/local/pages/tmp.php',
        'SORT'      => 200,
    ),
);
