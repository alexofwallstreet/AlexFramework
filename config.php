<?php

if (!APP_INIT) {
    die("Application not initialized");
}

$config = [
    "rootDir" => __DIR__,
    "db" => [
        "login" => "root",
        "password" => ""
    ],
    "template" => "alex_template"
];