<?php

if (!APP_INIT) {
    die("Application not initialized");
}

$config = [
    "db" => [
        "login" => "root",
        "password" => ""
    ],
    "template" => "alex_template",
    "rootDir" => __DIR__
];