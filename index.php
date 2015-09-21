<?php

require_once './vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);

if (!isset($_ENV['PRODUCTION'])) {
    $dotenv->load();
}

$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);
