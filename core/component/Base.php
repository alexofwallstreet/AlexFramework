<?php

namespace app\core\component;

abstract class Base
{
    abstract function executeComponent();

    public string $id;
    public array $params;
    public array $result;

    public Template $template;
    public string $__path;

    public function __construct()
    {

    }
}