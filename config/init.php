<?php

use Dotenv\Dotenv;


define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/zpdevfrw');
define("HELPERS", ROOT . '/vendor/zpdevfrw/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'zpdevfrw');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->safeLoad();
}

define("DEBUG", getenv('DEBUG'));
define("PATH", getenv('APP_URL'));
define("ADMIN", getenv('APP_ADMIN_URL'));

