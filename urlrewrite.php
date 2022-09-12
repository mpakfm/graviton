<?php
$arUrlRewrite=array (
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  array (
    'CONDITION' => "#^/page(/([a-zA-Z0-9_\-]+)(/)?(.*))?#",
    'RULE'      => "CODE=\$2&PARAMS=\$4",
    'ID'        => "bitrix:news.detail",
    'PATH'      => "/local/pages/one.page.php",
    'SORT'      => 100,
  ),
  array(
    'CONDITION' => '#^/only-for-admin(/)?#',
    'RULE'      => '',
    'ID'        => null,
    'PATH'      => '/local/pages/only-for-admin.php',
    'SORT'      => 200,
  ),
  array(
    'CONDITION' => '#^/error(/)?#',
    'RULE'      => '',
    'ID'        => null,
    'PATH'      => '/local/pages/error.php',
    'SORT'      => 200,
  ),
);
