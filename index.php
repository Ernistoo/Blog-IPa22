<?php


$url = parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($_SERVER["REQUEST_URI"]);

if ($url == "/") {
    require "controllers/index.php";
} else if ($url == "/about") {
    require "controllers/about.php";
} else if ($url == "/story") {
    require "controllers/story.php";
} else {
    require "controllers/404.php";
}
