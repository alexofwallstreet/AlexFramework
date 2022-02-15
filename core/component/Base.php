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

    public function __construct($component, $template, $params)
    {
        $this->id = $component;
        $this->params = $params;
        $this->__path = $this->getPath($component);
        $this->template = new Template($component, $template);
    }

    private function getPath($componentName): string
    {
        return "/components/".str_replace(":", "/", $componentName);
    }


}