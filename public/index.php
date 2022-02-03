<?php

use app\core\Application;
use app\core\Config;
use app\core\Router;

require_once __DIR__ . '/../init.php';

$app = Application::getInstance();
$config = Config::getInstance();
$router = Router::getInstance();

$app->header();
$app->footer();