<?php
$DB_CONNECTION = $_ENV['DB_CONNECTION'];
$DB_HOST = $_ENV['DB_HOST'];
$DB_PORT = getenv('DB_PORT');
$DB_DATABASE = getenv('DB_DATABASE');
return [
    'dsn'      => "{$DB_CONNECTION}:host={$DB_HOST}:{$DB_PORT};dbname={$DB_DATABASE};charset=utf8",
    'user'     => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
];
