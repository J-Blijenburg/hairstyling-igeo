<?php
require_once("../models/Carousel.php");
require_once("../repositories/Repository.php");

class CarouselRepository extends Repository {
    protected $connection;

    public function getAll(){
        $stmt = $this->connection->prepare("SELECT * From carousel");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Carousel');
        $openingsHours = $stmt->fetchAll();
        return $openingsHours;
    }
}