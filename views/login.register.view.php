<div class="container">
    <div class="row pt-4">
        <div class="col-6">
            <h4>Login</h4>
            <form action="" method="post">
                <input type="email" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="login_password" placeholder="password" class="form-control" required><br>
                <button class="form-control btn btn-primary" type="submit" name="loginBtn">Login</button>
            </form><br>
            <?php if($user->loggedUser): ?>
                <div class="alert alert-success">Login successfully <a href="index.php">Go to Small Shop</a></div>
            <?php elseif(isset($_POST["loginBtn"])): ?>   
                <div class="alert alert-danger">Email or password error</div>
            <?php endif; ?> 
        </div>
        <div class="col-6">
            <h4>Register</h4>
            <form action="" method="post">
                <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="text" name="username" placeholder="username" class="form-control" required><br>
                <input type="text" name="lastname" placeholder="lastname" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
                <button class="form-control btn btn-warning" type="submit" name="registerBtn">Register</button>
            </form><br>
            <?php if($user->register_result): ?>
                <div class="alert alert-success">Register successfully, you can login...</div>
            <?php endif; ?> 

        </div>
    </div>
</div>