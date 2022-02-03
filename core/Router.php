<?php

namespace app\core;

class Router
{
    use SingletonTrait;

    private static $routes = null;

    private function __construct()
    {
        require_once dirname(__DIR__) . "/routes.php";
        self::$routes = $routes;
    }
}