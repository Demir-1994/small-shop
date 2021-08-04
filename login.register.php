<?php
require "bootstrap.php";

    if (isset($_POST["registerBtn"])) {
    $user->registerUser(); 
    }

    if (isset($_POST["loginBtn"])) {
    $user->logUser(); 
    }
?>


<?php
require "views/login.register.view.php";
require "partials/footer.php";
?>