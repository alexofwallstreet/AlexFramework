<?php

namespace app\core;

class Router
{
    private static $routes = null;

    private function __construct()
    {
        require_once dirname(__DIR__) . "/routes.php";
        self::$routes = $routes;
    }
}