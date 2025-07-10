<?php

require_once BASE_PATH . '/bootstrap.php';
require_once BASE_PATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

$databases = [
    'pgHost' => $_ENV['PG_HOST'],
    'pgPort' => $_ENV['PG_PORT'],
    'pgDB' => $_ENV['PG_DB'],
    'pgUser' => $_ENV['PG_USER'],
    'pgPassword' => $_ENV['PG_PASS'],
    'mongoURI' => $_ENV['MONGO_URI'],
    'mongoHost' => $_ENV['MONGO_HOST'],
    'mongoPort' => $_ENV['MONGO_PORT'],
    'mongoDB' => $_ENV['MONGO_DB'],
    'mongoUser' => $_ENV['MONGO_USER'],
    'mongoPassword' => $_ENV['MONGO_PASS'],
];