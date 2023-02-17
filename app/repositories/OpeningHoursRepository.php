<?php
require_once("../models/Price.php");
require_once("../repositories/Repository.php");

class OpeningHoursRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT * From openingHours");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'OpeningHour');
        $prices = $stmt->fetchAll();
        return $prices;
    }
}