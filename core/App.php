<?php

namespace Core;

use Core\request\Request;
use Core\router\Route;
use Core\router\RouteDispatcher;

class App
{

    public static function run()
    {
        (new Error())->register();

        $routeData = RouteDispatcher::handler(
            Route::getRouteList($_SERVER['REQUEST_METHOD']),
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );

        $controller = ucfirst($routeData->getController());
        $method = $routeData->getMethod();

        $requestClass = $routeData->getRequestClass();
        $requestClass = class_exists($requestClass) ? [new $requestClass()] : [];

        (new $controller())->$method(...Route::getRouteParameters(), ...$requestClass);
    }

}