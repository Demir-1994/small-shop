<?php
class User extends QueryBuilder{
    public $register_result = NULL;
    public $loggedUser = NULL;

    function registerUser(){
        $username = $_POST["username"];
        $lastname = $_POST["lastname"];
        $email = $_POST["register_email"];
        $password = $_POST["register_password"];

        $sql = "INSERT INTO users VALUES(NULL, :username, :lastname, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["username"=>$username, "lastname"=>$lastname, "email"=>$email, "password"=>$password]);

        if ($stmt) {
             $this->register_result = true;
        } 
    }

    function logUser(){
        $email = $_POST["login_email"];
        $password = $_POST["login_password"];

        $sql = "SELECT * FROM users WHERE email=? AND password=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email, $password]);
        $loggedUser = $stmt->FETCH(PDO::FETCH_OBJ);
        if ($loggedUser != NULL) {
            $_SESSION["loggedUser"] = $loggedUser;
            $this->loggedUser = $loggedUser;
        }
    }

    function getUserWithId($id){
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["$id"]);

        $shopProductOwner = $stmt->FETCH(PDO::FETCH_OBJ);
        return $shopProductOwner;
    }

}