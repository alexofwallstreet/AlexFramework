<?php

namespace app\core;

class Application
{
    use SingletonTrait;

    private $__components = [];
    private Page $pager;
    private string $template;
    private Request $request;
    private Server $server;

    private function __construct()
    {
        $this->pager = Page::getInstance();
        $this->template = Config::get("template") ?? "default";
        $this->request = new Request();
        $this->server = new Server();
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getServer(): Server
    {
        return $this->server;
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
        include_once $rootDir . "/templates/$this->template/$file.php";
    }

    private function replaceAllMacros(string $buffer, array $replaces): string
    {
        return str_replace(array_keys($replaces), array_values($replaces), $buffer);
    }
}