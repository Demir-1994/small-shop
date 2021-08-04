<?php
require "bootstrap.php";
if (isset($_SESSION["loggedUser"]) && isset($_GET["remove_product"])){
    $shopproduct->deleteShopProduct($_GET["remove_product"]);
}
$shopproducts = $shopproduct->selectAll("shopproduct");
?>

   



<?php
require "views/index.view.php";
require_once 'partials/footer.php';
?>