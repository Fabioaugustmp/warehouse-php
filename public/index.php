<?php

require_once(realpath(dirname(__FILE__, 2)) . '/src/config/config.php');

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = '/DashBoardController.php';
}

if ($uri === '/product/create') {
    $uri = '/ProductControllerCreate.php';
}

if ($uri === '/product') {
    $uri = '/ProductController.php';
}

var_dump($uri === '/product/create');

require_once(CONTROLLER_PATH . "{$uri}");

