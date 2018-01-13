<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

use FastRoute\RouteCollector;
$container = require __DIR__ . '/app/bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r)
{
    $r->addRoute('GET', '/', ['Application\Controller\HomeController', 'index']);
    $r->addRoute('GET', '/insert', ['Application\Controller\HomeController', 'insert']);
    $r->addRoute('GET', '/find_all', ['Application\Controller\HomeController', 'find_all']);
    $r->addRoute('GET', '/find_one/{id}', ['Application\Controller\HomeController', 'find_one']);
    $r->addRoute('GET', '/update/{id}', ['Application\Controller\HomeController', 'update']);
    $r->addRoute('GET', '/delete/{id}', ['Application\Controller\HomeController', 'delete']);
    $r->addRoute('GET', '/find_by_username/{username}', ['Application\Controller\HomeController', 'find_by_username']);
    $r->addRoute('GET', '/insert_post/{id}', ['Application\Controller\HomeController', 'insert_post']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];

        //cargamos el controlador y el controlador con sus parámetros
        $container->call($controller, $parameters);
        break;
}