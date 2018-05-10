<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

defined('ELEPHANTSGROUP_ADMIN_BASE_PATH') or define('ELEPHANTSGROUP_ADMIN_BASE_PATH', dirname(dirname(dirname(__DIR__))));

require(ELEPHANTSGROUP_ADMIN_BASE_PATH . '/vendor/autoload.php');
require(ELEPHANTSGROUP_ADMIN_BASE_PATH . '/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@tests', dirname(dirname(__DIR__)));
