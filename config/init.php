<?php

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
define("PATH", 'http://zapadev.education.wfms.framework');
define("ADMIN", 'http://zapadev.education.wfms.framework/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
