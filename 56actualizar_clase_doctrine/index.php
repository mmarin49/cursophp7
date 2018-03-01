<?php
session_start();

use FastRoute\RouteCollector;
$container = require __DIR__ . '/app/bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r)
{
    $r->addRoute('GET', '/', ['Application\Controller\HomeController', 'index']);
    $r->addRoute(['GET','POST'], '/login', ['Application\Controller\UserController', 'login']);
    $r->addRoute(['GET','POST'], '/registro', ['Application\Controller\UserController', 'registro']);
    $r->addRoute('GET', '/logout', ['Application\Controller\UserController', 'logout']);
    $r->addRoute('GET', '/dashboard', ['Application\Controller\DashboardController', 'index']);
    $r->addRoute(['GET','POST'], '/upload_files', ['Application\Controller\UploadController', 'index']);
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