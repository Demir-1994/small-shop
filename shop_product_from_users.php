<?php
require "bootstrap.php"; 
$id=$_GET["id"];
$shopproducts = $shopproduct->getShopProductFromUser("$id");
?>

   



<?php
require "views/shop_product_from_users.view.php";
require_once 'partials/footer.php';
?>