<?php
require_once("../models/Price.php");
require_once("../repositories/Repository.php");

class PriceRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT * From prices");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Price');
        $prices = $stmt->fetchAll();
        return $prices;
    }

    public function getPricesHeren(){
        $stmt = $this->connection->prepare("SELECT * From prices WHERE PriceType = 'Heren'");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Price');
        $prices = $stmt->fetchAll();
        return $prices;
    }

    public function getPricesDames(){
        $stmt = $this->connection->prepare("SELECT * From prices WHERE PriceType = 'Dames'");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Price');
        $prices = $stmt->fetchAll();
        return $prices;
    }

    public function getPricesKinderen(){
        $stmt = $this->connection->prepare("SELECT * From prices WHERE PriceType = 'Kinderen'");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Price');
        $prices = $stmt->fetchAll();
        return $prices;
    }
}