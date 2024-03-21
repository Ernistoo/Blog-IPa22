<?php

require "functions.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO posts (title, category_id)
    VALUES(:title, :category_id)";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"]
    ];
    $db->execute($query, $params);
    header("Location: /");
    die();
}

$page_title = "Create a post";
require "views/posts-create.view.php";
