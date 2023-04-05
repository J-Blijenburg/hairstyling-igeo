<?php
require_once("../repositories/PricesRepository.php");
class PriceController
{
    public function prijzen()
    {
        //The html page consist of multiple view. This is done to prevent duplicated code.
        $baseController =  new BaseController();
        $baseController->header();

        //prijzen uses the prices, we use the repo to get them from database
        $pricesRepository = new PriceRepository();

        $allPrices = $pricesRepository->getAll();

        //we already use seperate arrays of the prices
        $pricesHeren = $pricesRepository->getPricesHeren();
        $pricesDames = $pricesRepository->getPricesDames();
        $pricesKinderen = $pricesRepository->getPricesKinderen();

        require("../views/prijzen.php");

        $baseController->footer();
    }
}