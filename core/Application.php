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

    public function header()
    {
        self::startBuffer();
        self::includeTemplateFile("header");
    }

    public function footer()
    {
        self::includeTemplateFile("footer");
        $buffer = self::endBuffer();
        self::restartBuffer();
        self::outputBuffer($buffer);
    }

    private function includeTemplateFile($file)
    {
        $rootDir = Config::get("rootDir");
        $template = Config::get("template");
        include_once $rootDir . "/templates/$template/$file.php";
    }

}