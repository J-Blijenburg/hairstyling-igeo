<?php
require_once("../repositories/PricesRepository.php");

class BaseController
{

    public function header()
    {
        require("../views/Header.php");
    }

    public function body($page)
    {
        $pricesRepository = new PriceRepository();

        $allPrices = $pricesRepository->getAll();

        require("../views/$page.php");
    }


    public function footer()
    {
        require("../views/Footer.php");
    }
}