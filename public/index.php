<?php

use zpdevfrw\App;

if(PHP_MAJOR_VERSION < 8){
    die('PHP version should be >= 8.0');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routs.php';

new App();



