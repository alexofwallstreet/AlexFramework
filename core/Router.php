<?php

namespace app\core;

class Router {
    private $routes = [];

    public function __construct()
    {
        require_once dirname(__DIR__) . "/routes.php";
        $this->routes = $routes;
    }
}