<?php

namespace app\core;

class Application
{
    private $__components = [];
    private $pager = null;
    private static $instance = null;
    private $template = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}