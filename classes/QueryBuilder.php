<?php

class QueryBuilder{
    protected $db;
    function __construct($db)  
    {
        $this->db=$db;
    }


    function selectAll($table){
        $sql = "SELECT * FROM {$table}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}