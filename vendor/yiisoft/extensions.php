<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-bootstrap5' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap5',
    'version' => '2.0.50.0',
    'alias' => 
    array (
      '@yii/bootstrap5' => $vendorDir . '/yiisoft/yii2-bootstrap5/src',
    ),
    'bootstrap' => 'yii\\bootstrap5\\i18n\\TranslationBootstrap',
  ),
  'yidas/yii2-bower-asset' => 
  array (
    'name' => 'yidas/yii2-bower-asset',
    'version' => '2.0.13.1',
    'alias' => 
    array (
      '@yidas/yii2BowerAsset' => $vendorDir . '/yidas/yii2-bower-asset',
    ),
  ),
);
