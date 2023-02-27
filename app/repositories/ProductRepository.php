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
    public function getGroupProducts(){
        $stmt = $this->connection->prepare("SELECT * FROM products WHERE ProductType = 1");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $products = $stmt->fetchAll();
        return $products;
    }
    public function getEntireComposition($productName){
        $stmt = $this->connection->prepare("SELECT * FROM products WHERE ProductName = :productName AND ProductType = 0");
        $stmt->bindParam(':productName', $productName);
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $products = $stmt->fetchAll();
        return $products;
    }
    
}