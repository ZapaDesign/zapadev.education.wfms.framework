<?php

define("DEBAG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . 'vendor/zpdev');
define("HELPERS", ROOT . 'vendor/zpdev/helpers');
define("CACHE", ROOT . 'tmp/cache');
define("LOGS", ROOT . 'tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'zpdev');
define("PATH", 'http://zapadev.education.wfms.framework');
define("ADMIN", 'http://zapadev.education.wfms.framework/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
