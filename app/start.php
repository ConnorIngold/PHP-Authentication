<?php

use Slim\App;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'on');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new App();

$app->get('/test', function($name) {
  echo 'Hello {$name}';
});
