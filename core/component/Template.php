<?php

namespace app\core\component;

class Template
{
    private string $id;
    private string $__path;
    private string $__relativePath;

    public function __construct($component, $template)
    {
        $this->id = $component;
        $this->__path = $this->getPath($component);
        $this->__relativePath = $this->getRelativePath($this->__path, $template);
    }

    function render(string $page = "template")
    {

    }

    private function getRelativePath($path, $template): string
    {
        return $_SERVER["DOCUMENT_ROOT"].$path."/".$template;
    }

    private function getPath($componentName): string
    {
        return "/components/".str_replace(":", "/", $componentName);
    }
}