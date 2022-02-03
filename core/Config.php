<?php

namespace app\core;

class Config
{
    use SingletonTrait;

    private static $config = null;

    private function __construct()
    {
        require_once dirname(__DIR__) . "/config.php";
        self::$config = $config;
    }

    public static function get(string $path)
    {
        $pathParts = explode('/', $path);
        $result = null;
        foreach ($pathParts as $pathPart) {
            $result = ($result === null) ? self::$config[$pathPart] : $result[$pathPart];
        }
        return $result ?? false;
    }
}