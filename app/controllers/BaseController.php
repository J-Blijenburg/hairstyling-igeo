<?php
require_once("../repositories/PricesRepository.php");
class BaseController
{

    public function header()
    {
        require("../views/Header.php");
    }

    public function body()
    {
        $pricesRepository = new PriceRepository();

        $allPrices = $pricesRepository->getAll();
        require("../views/home.php");
    }


    public function footer()
    {
        require("../views/Footer.php");
    }
}