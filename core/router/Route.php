<?php

namespace Core\router;

class Route
{
    private static array $Routes;
    private static array $RouteParameters = [];

    public static function get($route, $controller, $method)
    {
        $route = new RouteBuilder($route, $controller, $method);
        self::$Routes['GET'][] = $route;

        return $route;
    }

    public static function post($route, $controller, $method)
    {
        $route = new RouteBuilder($route, $controller, $method);
        self::$Routes['POST'][] = $route;

        return $route;
    }

    public static function getRouteList($key = null)
    {
        return $key ? self::$Routes[$key] : self::$Routes;
    }

    public static function setRouteParameters($parameters)
    {
        self::$RouteParameters = $parameters;
    }

    public static function getRouteParameters(): array
    {
        return self::$RouteParameters;
    }

    public static function Redirect($url)
    {
        header('Location: http://' . $url);
    }
}