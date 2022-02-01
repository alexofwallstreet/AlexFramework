<?php

namespace app\core;

class Config {

    private $config = [];

    public function __construct()
    {
        require_once dirname(__DIR__) . "/config.php";
        $this->config = $config;
    }

    public function get(string $path)
    {
        $pathParts = explode('/', $path);
        $result = null;
        foreach ($pathParts as $pathPart) {
            $result = ($result === null) ? $this->config[$pathPart] : $result[$pathPart];
        }
        return $result ?? false;
    }
}