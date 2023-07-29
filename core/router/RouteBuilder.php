<?php

namespace core\router;

class RouteBuilder
{
    private string $route;
    private string $controller;
    private string $method;
    private string $name;
    private string $requestClass;

    public function __construct($route, $controller, $method)
    {
        $this->route = $route;
        $this->controller = $controller;
        $this->method = $method;
        $this->requestClass = ucfirst(str_replace('controller', 'request', $controller)) . 'Request';
        return $this;
    }

    public function name($str)
    {
        $this->name = $str;

        return $this;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getRequestClass()
    {
        return $this->requestClass;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getName()
    {
        return $this->name;
    }
}