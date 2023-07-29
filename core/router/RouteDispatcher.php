<?php

namespace core\router;

use app\controller\ErrorPage;

class RouteDispatcher
{

    public static function handler($Routes, $requestUri)
    {
        foreach ($Routes as $routeItem)
        {
            if(self::compareRouteWithUri($routeItem->getRoute(), $requestUri))
            {
                return $routeItem;
            }
        }

        return Route::get('/404/', ErrorPage::class, 'index');
    }

    private static function compareRouteWithUri($route, $requestUri)
    {
        $parameters = [];

        $routeItems = preg_split('/\//', trim($route, '/'));
        $requestItems = preg_split('/\//', trim($requestUri, '/'));

        if(count($routeItems) !== count($requestItems)) return false;

        foreach ($routeItems as $key => $routeItem)
        {
            if($routeItem === $requestItems[$key])
            {
                continue;
            }

            if(preg_match('/^\{[^}]+\}$/', $routeItem) && preg_match('/[\w\d_-]+/', $requestItems[$key]))
            {
                $getKey = preg_replace('/^\{([^}]+)\}$/', '$1', $routeItem);
                $parameters[$getKey] = $requestItems[$key];

                continue;
            }

            return false;
        }

        Route::setRouteParameters($parameters);

        return true;
    }
}