
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
use FastRoute\RouteCollector;
$container = require __DIR__ . "/app/bootstrap.php";

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $router)
{
    $router->addRoute("GET", "/", ['Blog\Controller\HomeController', 'index']);
    $router->addRoute("GET", "/hola/{nombre}", ['Blog\Controller\HomeController', 'hola']);
    $router->addRoute("GET", "/phpinfo", ['Blog\Controller\HomeController', 'phpinfo']);
    $router->addRoute("GET", "/articulos", 'Blog\Controller\HomeController');
});

$route = $dispatcher->dispatch($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);

switch($route[0])
{
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "404 NOT FOUND";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "404 NOT ALLOWED";
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;
}