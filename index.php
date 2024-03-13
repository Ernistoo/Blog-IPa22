<?php

echo "hi";

$url = parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($_SERVER["REQUEST_URI"]);

if ($url == "/") {
    require "controllers/index.php";
}
if ($url == "/about") {
    require "controllers/about.php";
}
if ($url == "/story") {
    require "controllers/story.php";
}
