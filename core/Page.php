<?php

namespace app\core;

class Page
{
    use SingletonTrait;

    const CSS = "__css__";
    const JS = "__js__";
    const STRINGS = "__strings__";

    private array $css = [];
    private array $js = [];
    private array $strings = [];
    private array $properties = [];
    private array $replaces = [];

    public function addCss($path): bool
    {
        if ($path == '') {
            return false;
        }

        if (in_array($path, $this->css)) {
            return false;
        }

        $this->css[] = $path;
        return true;
    }

    public function addJs($path): bool
    {
        if ($path == '') {
            return false;
        }

        if (in_array($path, $this->js)) {
            return false;
        }

        $this->js[] = $path;
        return true;
    }

    public function addString($str): bool
    {
        if ($str == '') {
            return false;
        }

        if (in_array($str, $this->strings)) {
            return false;
        }

        $this->strings[] = $str;
        return true;
    }

    public function setProperty(string $id, $value)
    {
        $this->properties[$id] = $value;
        $this->replaces[$this->getMacro($id)] = $value;
    }

    public function getProperty(string $id)
    {

    }

    public function showProperty(string $id)
    {

    }

    public function getAllReplace(): array
    {
        $this->replaces[$this->getMacro(self::CSS)] = implode("", $this->css);
        $this->replaces[$this->getMacro(self::JS)] = implode("", $this->js);
        $this->replaces[$this->getMacro(self::STRINGS)] = implode("", $this->strings);
        return $this->replaces;
    }

    public function showHead()
    {
        echo "<meta charset='utf-8'>";
        echo $this->getMacro(self::STRINGS);
        echo $this->getMacro(self::CSS);
        echo $this->getMacro(self::JS);
    }

    private function getMacro(string $id): string
    {
        return "#PAGE_PROPERTY_{{$id}}#";
    }

}