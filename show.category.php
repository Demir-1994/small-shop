<?php
require "bootstrap.php"; 
$cat=$_GET["cat"];
$shopproducts = $shopproduct->getShopProductCategory("$cat");
?>

   



<?php
require "views/show.category.view.php";
require_once 'partials/footer.php';
?>