<?php

use Dotenv\Dotenv;

define("DEBUG", 1);
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

if (file_exists(__DIR__ . '/config/.env')) {
    $dotenv = Dotenv::create(__DIR__);
    $dotenv->safeLoad();
}

define("PATH", getenv('APP_URL'));
define("ADMIN", getenv('APP_ADMIN_URL'));

