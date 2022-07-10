<?php

use zpdevfrw\App;

if(PHP_MAJOR_VERSION < 8){
    die('PHP version should be >= 8.0');
}

require_once dirname(__DIR__) . '/config/init.php';

new App();


echo '<pre>';
var_dump(App::$app->getProperties());
echo '</pre>';

echo '<pre>';
var_dump(App::$app->getProperty('admin_email'));
echo '</pre>';

