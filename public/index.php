<?php

if(PHP_MAJOR_VERSION < 8){
    die('PHP version should be >= 8.0');
}

require_once dirname(__DIR__) . '/config/init.php';

echo 'TEST';