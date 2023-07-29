<?php

namespace core;

use Core\request\Request;
use Core\router\Route;
use Core\router\RouteDispatcher;

class App
{

    public static function run()
    {
        $routeData = RouteDispatcher::handler(
            $_POST ? Route::getRoute('post') : Route::getRoute('get'),
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );

        $controller = ucfirst($routeData->getController());
        $method = $routeData->getMethod();

        $requestClass = $routeData->getRequestClass();
        $requestClass = class_exists($requestClass) ? [new $requestClass()] : [];

        (new $controller())->$method(...Route::getRouteParameters(), ...$requestClass);
    }

}