<?php

namespace app\core;

class Config {

    private static $config = null;

    private static function getConfig()
    {
        require_once dirname(__DIR__) . "/config.php";
        return $config;
    }

    public static function get(string $path)
    {
        if (self::$config === null) {
            self::$config = self::getConfig();
        }

        $pathParts = explode('/', $path);
        $result = null;
        foreach ($pathParts as $pathPart) {
            $result = ($result === null) ? self::$config[$pathPart] : $result[$pathPart];
        }
        return $result ?? false;
    }
}