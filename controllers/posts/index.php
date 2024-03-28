<?php
// Dabūt datus no datu bāzes un izvadīt tos HTML
require "functions.php";
$config = require "config.php";
require "Database.php";

$db = new Database($config);

$query_string = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
  // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
  $query_string .= " WHERE id=:id";
  $params[":id"] = $_GET["id"];
}

if (isset($_GET["category"]) && $_GET["category"] != "") {
  // .= paņem iepriekšējo vērtību un pieliek WHERE klāt ❤️
  $query_string .= " JOIN categories ON posts.category_id = categories.id WHERE categories.name=:category";
  $params[":category"] = $_GET["category"];
}
$posts = $db->execute($query_string, $params);

$page_title = "Posts";

require "views/posts/index.view.php";
