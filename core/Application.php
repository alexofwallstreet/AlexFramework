<?php

namespace app\core;

use Cassandra\Varint;

class Application
{
    use SingletonTrait;

    private $__components = [];
    private Page $pager;
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

    private function endBuffer(): string
    {
        $buffer = ob_get_contents();
        return $this->replaceAllMacros($buffer, $this->pager->getAllReplace());
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

    private function replaceAllMacros(string $buffer, array $replaces): string
    {
        return str_replace(array_keys($replaces), array_values($replaces), $buffer);
    }
}