<?php

namespace app\core;

class Router {
    private static $routes = null;

    private static function getRoutes()
    {
        require_once dirname(__DIR__) . "/routes.php";
        return $routes;
    }
}