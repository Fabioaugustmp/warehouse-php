<?php

require_once(realpath(dirname(__FILE__, 1)) . '/src/config/config.php');
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$routes = [
    '/' => '/DashBoardController.php',
    '/product/create' => '/ProductControllerCreate.php',
    '/product' => '/ProductController.php',
    '/notfound' => '/NotFoundController.php'
    // Adicione mais rotas conforme necessário
];

// Verifica se a rota existe no array, caso contrário, redireciona para uma página de erro
if (array_key_exists($uri, $routes)) {
    require_once(CONTROLLER_PATH . $routes[$uri]);
} else {
    // Rota não encontrada, redireciona para uma página de erro 404 ou lida de outra forma
    header("HTTP/1.0 404 Not Found");
    require_once(CONTROLLER_PATH . '/NotFoundController.php');
}


