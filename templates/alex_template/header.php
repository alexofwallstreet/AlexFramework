<?php

use app\core\Application;
use app\core\Page;
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    Page::getInstance()->showHead();
    Page::getInstance()->addString("<meta charset='utf-8'>");
    Page::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Page::getInstance()->addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    Page::getInstance()->addJs("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js");
    ?>
    <title><?php Page::getInstance()->showProperty("title"); ?></title>
</head>
<body>
<?php
Application::getInstance()->IncludeComponent(
    "alex:menu",
    "bootstrap",
    Array (
        "menuItems" => [
            ["title" => "Home", "url" => "/"],
            ["title" => "About", "url" => "/about"],
            ["title" => "Contacts", "url" => "/contacts"],
        ]
    )
);
?>

<div class="container">

