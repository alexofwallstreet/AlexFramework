<?php
use app\core\Page;
?>

<!doctype html>
<html lang="en">
<head>
    <?php Page::getInstance()->showHead() ?>
    <?php
    Page::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Page::getInstance()->addString("<title>AlexFramework</title>");
    ?>
</head>
<body>
<div>
    Default Header
