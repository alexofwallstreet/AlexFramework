<?php

namespace app\core\component;

use app\core\Application;
use app\core\Page;

class Template
{
    private string $id;
    private string $__path;
    private string $__relativePath;
    private Base $parentComponent;

    public function __construct($component, $template)
    {
        $this->id = $template;
        $this->parentComponent = $component;
        $this->__relativePath = $this->parentComponent->__path."/templates/$template/";
        $this->__path = $_SERVER["DOCUMENT_ROOT"].$this->__relativePath;
    }

    function render(array $params, array $result, string $page = "template")
    {
        //[1] result_modifier.php
        if (file_exists($this->__path."result_modifier.php")) {
            include $this->__path."result_modifier.php";
        }
        //[2] template.php
        if (file_exists($this->__path."$page.php")) {
            include $this->__path."$page.php";
        }
        //[3] component_epilog.php
        if (file_exists($this->__path."component_epilog.php")) {
            include $this->__path."component_epilog.php";
        }
        //styles and js
        if (file_exists($this->__path."style.css")) {
            Page::getInstance()->addCss($this->__relativePath."style.css");
        }
        if (file_exists($this->__path."script.js")) {
            Page::getInstance()->addJs($this->__relativePath."script.js");
        }
    }
}