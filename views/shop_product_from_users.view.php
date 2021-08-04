<div class="container">
  <h1 class="text-center mb-5 mt-5">Shop Products from <b><?php echo $user->getUserWithId($id)->username; ?></b></h1>
  <?php require "views/shop_products.view.php"; ?>
</div>