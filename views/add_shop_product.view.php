<div class="container">
   <div class="row">
     <div class="col-6 offset-3">
       <h4 class="text-center m-3">Add new product</h4>
       <form class="" action="add_shop_product.php" method="post">
         <input type="text" name="title" placeholder="title" class="form-control"><br>
         <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea><br>
         <input type="number" name="price" placeholder="price" class="form-control"><br>
         <select name="category" class="form-control">
           <option class="form-control" value="laptop">Laptop</option>
           <option class="form-control" value="mobile">Mobile</option>
           <option class="form-control" value="tablet">Tablet</option>
         </select><br>

         <button type="submit" class="btn btn-primary form-control" name="addShopProduct">Add new</button>
       </form><br>
       <?php if($shopproduct->addShopProduct): ?>
                <div class="alert alert-success">Shop product added successfully
                </div>
            <?php elseif(isset($_POST["addShopProduct"])): ?>   
                <div class="alert alert-danger">Something problem</div>
            <?php endif; ?> 
     </div>
   </div>
 </div>