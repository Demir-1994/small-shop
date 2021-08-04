<?php
require "bootstrap.php";
if (!isset($_SESSION["loggedUser"])) {
    header("Location: index.php");
}

if (isset($_POST["addShopProduct"])) {
    $shopproduct->addShopProduct(); 
    }

?>

   



<?php
require "views/add_shop_product.view.php";
require_once 'partials/footer.php';
?>