  <div class="card-group">
   <?php foreach ($shopproducts as $shopproduct): ?>
      <div class="card">
        <div class="card-header">
            <a href = "show.category.php?cat=<?php echo $shopproduct->category; ?> 
               " class="btn btn-secondary btn-sm">
                   <?php echo $shopproduct->category; ?></a>

                   <?php if (isset($_SESSION["loggedUser"]) && $_SESSION["loggedUser"]->id==$shopproduct->user_id): ?>
                         <a href = "index.php?remove_product=<?php echo $shopproduct->id; ?> 
                           " class="btn btn-danger btn-sm float-end">Remove</a>
                    <?php endif; ?> 
        </div>

        <div class="card-body text-center">
          <h5><?php echo $shopproduct->title; ?></h5>
               <?php echo $shopproduct->description; ?>
        </div>

        <div class="card-footer">
          <a href = "shop_product_from_users.php?id=<?php echo $shopproduct->user_id; ?>
            " class="btn btn-warning btn-sm float-left">
              <?php echo $user->getUserWithId($shopproduct->user_id)->username; ?></a>
                <button class="btn btn-info btn-sm float-end">
                  <?php echo $shopproduct->price; ?>
                </button>
        </div>
        </div>
    <?php endforeach; ?>
  </div>