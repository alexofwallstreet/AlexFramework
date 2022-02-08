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
        $this->pager = Page::getInstance();
    }

    public function header()
    {
        $this->startBuffer();
        $this->includeTemplateFile("header");
    }

    public function footer()
    {
        $this->includeTemplateFile("footer");
        $buffer = $this->endBuffer();
        $this->restartBuffer();
        $this->outputBuffer($buffer);
    }

    private function startBuffer()
    {
        ob_start();
    }

    private function endBuffer()
    {
        $buffer = ob_get_contents();
        /*
         * замена макросов подмены в $buffer
         */
        return $buffer;
    }

    private function restartBuffer()
    {
        ob_clean();
    }

    private function outputBuffer($buffer)
    {
        echo $buffer;
    }

    private function includeTemplateFile($file)
    {
        $rootDir = Config::get("rootDir");
        $template = Config::get("template");
        include_once $rootDir . "/templates/$template/$file.php";
    }
}