<?php
class ShopProduct extends QueryBuilder{
    public $addShopProduct = NULL;
    public function addShopProduct(){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $category = $_POST["category"];
        $user_id = $_SESSION["loggedUser"]->id;

        $sql = "INSERT INTO shopproduct VALUES(NULL, :title, :description, :category, :price, :user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["title"=>$title, "description"=>$description, "category"=>$category, "price"=>$price, "user_id"=>$user_id]);

        if ($stmt) {
             $this->addShopProduct = true;
        } 
    }

    public function getShopProductCategory($cat){
        $sql = "SELECT * FROM shopproduct WHERE category=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["$cat"]);
        
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getShopProductFromUser($id){
        $sql = "SELECT * FROM shopproduct WHERE user_id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["$id"]);
        
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteShopProduct($id){
        $sql = "DELETE FROM shopproduct WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }

    
} 