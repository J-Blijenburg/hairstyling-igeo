<?php
require_once("../models/Price.php");
require_once("../repositories/Repository.php");

class PriceRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT PriceId, PriceType, PriceName, PricePrice From prices");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Price');
        $prices = $stmt->fetchAll();
        return $prices;
    }
}