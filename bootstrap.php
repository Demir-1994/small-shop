<?php
session_start();
require "partials/header.php";
require "partials/navbar.php";
require "classes/Connection.php";

$db=Connection::connect();

require "classes/QueryBuilder.php";
require "classes/User.php";
require "classes/ShopProduct.php";

$query = new QueryBuilder($db);
$user = new User($db);
$shopproduct = new ShopProduct($db);
?>