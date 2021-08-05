<?php
session_start();
require "classes/Connection.php";
require "partials/header.php";
require "partials/navbar.php";


$db=Connection::connect();

require "classes/QueryBuilder.php";
require "classes/User.php";
require "classes/ShopProduct.php";

$query = new QueryBuilder($db);
$user = new User($db);
$shopproduct = new ShopProduct($db);
?>