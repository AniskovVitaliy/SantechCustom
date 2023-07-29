<?php

namespace Core\router;

class Route
{
    private static array $Routes;
    private static array $RouteParameters = [];

//    private static array $GetParameters = [];
//    private static array $PostParameters = [];

    public static function get($route, $controller, $method)
    {
        $route = new RouteBuilder($route, $controller, $method);
        self::$Routes['get'][] = $route;

        return $route;
    }

    public static function post($route, $controller, $method)
    {
        $route = new RouteBuilder($route, $controller, $method);
        self::$Routes['post'][] = $route;

        return $route;
    }

    public static function getRoute($key = null)
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

//    public static function setPostParameters($post)
//    {
//        self::$PostParameters = [...self::$PostParameters, ...$post];
//    }
//
//    public static function setGetParameters($get)
//    {
//        self::$GetParameters = [...self::$GetParameters, ...$get];
//    }

//    public static function setPostParameters($post)
//    {
//        return self::$PostParameters = $post;
//    }
//
//    public static function setGetParameters($get)
//    {
//        return self::$GetParameters = $get;
//    }


}