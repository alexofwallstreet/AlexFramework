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

    public function includeComponent(string $component, string $template, array $params)
    {
        $componentFile = $this->getComponentPath($component);
        if (!file_exists($componentFile)) {
            return false;
        }
        if (isset($this->__components[$component])) {
            $componentClassName = $this->__components[$component];
        } else {
            $declaredClassesBefore = get_declared_classes();
            include_once $componentFile;
            $declaredClassesAfter = get_declared_classes();
            $declaredClassesDiff = array_diff($declaredClassesAfter, $declaredClassesBefore);
            $componentClassName = array_values($declaredClassesDiff)[0];
            $this->__components[$component] = $componentClassName;
        }
        $newComponent = new $componentClassName($component, $template, $params);
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

    private function getComponentPath(string $component): string
    {
        $componentPath = str_replace(":", "/", $component);
        return $_SERVER["DOCUMENT_ROOT"]."/components/".$componentPath."/.class.php";
    }
}