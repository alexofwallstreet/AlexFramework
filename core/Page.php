<?php

namespace app\core;

class Page
{
    use SingletonTrait;

    private $css;
    private $js;
    private $strings;

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
}