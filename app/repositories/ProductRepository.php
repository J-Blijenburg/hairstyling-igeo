<?php
require_once("../models/Product.php");
require_once("../repositories/Repository.php");

class ProductRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT * From products");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $products = $stmt->fetchAll();
        return $products;
    }


    
}