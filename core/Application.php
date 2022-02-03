<?php

namespace app\core;

class Application
{
    use SingletonTrait;

    private $__components = [];
    private $pager = null;
    private $template = null;

    private function __construct()
    {

    }
}