<?php

namespace app\core;

class Page
{
    use SingletonTrait;

    private const CSS = "__css__";
    private const JS = "__js__";
    private const STRINGS = "__strings__";

    private array $css = [];
    private array $js = [];
    private array $strings = [];
    private array $properties = [];

    public function addCss($path): bool
    {
        if ($path == '') {
            return false;
        }

        if (isset($css[$path])) {
            return false;
        }

        $this->css[$path] = "<link href='$path' rel='stylesheet' />";
        return true;
    }

    public function addJs($path): bool
    {
        if ($path == '') {
            return false;
        }

        if (isset($js[$path])) {
            return false;
        }

        $this->js[$path] = "<script src='$path'></script>";
        return true;
    }

    public function addString($str): bool
    {
        if ($str == '') {
            return false;
        }

        $this->strings[] = $str;
        return true;
    }

    public function setProperty(string $id, string $value)
    {
        $this->properties[$id] = $value;
    }

    public function getProperty(string $id)
    {
        return $this->properties[$id];
    }

    public function showProperty(string $id)
    {
        echo $this->getMacro($id);
    }

    public function getAllReplace(): array
    {
        $replaces = [];
        $replaces[$this->getMacro(self::CSS)] = implode("\n", $this->css) . "\n";
        $replaces[$this->getMacro(self::JS)] = implode("\n", $this->js) . "\n";
        $replaces[$this->getMacro(self::STRINGS)] = implode("\n", $this->strings) . "\n";
        foreach ($this->properties as $id=>$value) {
            $replaces[$this->getMacro($id)] = $value;
        }
        return $replaces;
    }

    public function showHead()
    {
        echo $this->getMacro(self::STRINGS);
        echo $this->getMacro(self::CSS);
        echo $this->getMacro(self::JS);
    }

    private function getMacro(string $id): string
    {
        return "#PAGE_PROPERTY_{{$id}}#";
    }

}