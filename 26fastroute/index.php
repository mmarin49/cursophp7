<?php

require 'vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route)
{
    $route->addRoute("GET", "/users", "get_all_users");
    $route->addRoute("GET","/user/{id:\d+}","get_user");
    $route->addRoute("GET","/posts/{title}","get_post_by_title");
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

echo "<pre>";
print_r($routeInfo);

switch($routeInfo[0])
{
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "ruta no encontrada";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "ruta no permitida";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func($handler, $vars);
        break;
}


function get_all_users()
{
    echo "Obtener todos los usuarios";
}
function get_user()
{
    $params = func_get_arg(0);
    print_r($params["id"]);
}

function get_post_by_title($title)
{
    echo "Post con titulo {$title['title']}";
}

