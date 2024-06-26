<?php

require "Validator.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config);
// $validator = new Validator();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $title = $_POST["title"];

    if (!Validator::string($title, max: 255)) {
        $errors["title"] = "Nedrikst but mazs vai liels";
    }

    $max_category_id = $db->execute("SELECT MAX(ID) FROM categories", [])->fetch()["MAX(ID)"];
    if (!Validator::number($_POST["category_id"], min: 1, max: $max_category_id)) {
        $errors["category_id"] = "Nav atbilstosas kategorijas";
    }

    if (empty($errors)) {
        $query = "INSERT INTO posts (title, category_id)
                 VALUES (:title, :category_id)";
        $params = [
            ":title" => $_POST["title"],
            ":category_id" => $_POST["category_id"]
        ];
        $db->execute($query, $params);
        header("Location: /");
        die();
    }
}


$page_title = "Create a post";
require "views/posts/create.view.php";
