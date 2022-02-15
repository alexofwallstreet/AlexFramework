<?php

namespace app\core\component;

use app\core\Application;
use app\core\Page;

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

    function render(string $page = "template", array $result)
    {
        if (file_exists($this->__relativePath."result_modifier.php")) {
            include $this->__relativePath."result_modifier.php";
        }
        if (file_exists($this->__relativePath."template.php")) {
            include $this->__relativePath."template.php";
        }
        if (file_exists($this->__relativePath."component_epilog.php")) {
            include $this->__relativePath."component_epilog.php";
        }
        if (file_exists($this->__relativePath."style.css")) {
            Page::getInstance()->addCss($this->__relativePath."style.css");
        }
        if (file_exists($this->__relativePath."script.js")) {
            Page::getInstance()->addJs($this->__relativePath."script.js");
        }
    }

    private function getRelativePath($path, $template): string
    {
        return $_SERVER["DOCUMENT_ROOT"].$path."/"."templates/".$template."/";
    }

    private function getPath($componentName): string
    {
        return "/components/".str_replace(":", "/", $componentName);
    }
}