<?php

$config = require "config.php";
require "Database.php";


$db = new Database($config);

$query_string = "SELECT * FROM posts WHERE id =:id";
$params = [":id" => $_GET["id"]];
$post = $db->execute($query_string, $params)->fetch();



require "views/posts/show.view.php";
