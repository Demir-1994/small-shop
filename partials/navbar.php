<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php"><i class="far fa-cash-register"></i>The Small Shop</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <?php if (isset($_SESSION["loggedUser"])): ?>
                <a class="btn btn-warning text-white me-1" href="add_shop_product.php">Add Product</a>
                <a class="btn btn-primary text-white" href="logout.php">
                <i class="fa fa-sign-out fa-fw"></i>Logout</a>
            <?php else: ?>
            <a class="nav-link" href="login.register.php"></i>Login/Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
</div>