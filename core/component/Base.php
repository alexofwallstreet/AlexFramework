<?php

namespace app\core\component;

abstract class Base
{
    abstract function executeComponent();

    protected string $id;
    protected array $params;
    protected array $result;

    protected Template $template;
    protected string $__path;

    public function __construct($component, $template, $params)
    {
        $this->id = $component;
        $this->params = $params;
        $this->__path = $this->makePath($component);
        $this->template = new Template($this, $template);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getTemplate(): Template
    {
        return $this->template;
    }

    public function getPath(): string
    {
        return $this->__path;
    }

    private function makePath($componentName): string
    {
        return "/components/".str_replace(":", "/", $componentName);
    }

    protected function getAttributesString($componentAttributes): string
    {
        if (!isset($componentAttributes)) {
            return "";
        }
        $attributes = $this->params["attr"];
        $attributesHTML = "";
        foreach ($attributes as $key=>$value) {
            $attributesHTML .= $key."=\"".$value."\"";
        }
        return $attributesHTML;
    }
}