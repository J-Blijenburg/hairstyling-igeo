<?php
require_once("../models/OpeningHour.php");
require_once("../repositories/Repository.php");

class OpeningHoursRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT * From openingHours");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'OpeningHour');
        $openingsHours = $stmt->fetchAll();
        return $openingsHours;
    }
}