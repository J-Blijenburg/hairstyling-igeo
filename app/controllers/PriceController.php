<?php
require_once("../repositories/PricesRepository.php");
class PriceController
{
    public function prijzen()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();

         $pricesRepository = new PriceRepository();

         $allPrices = $pricesRepository->getAll();

         $pricesHeren = $pricesRepository->getPricesHeren();
         $pricesDames = $pricesRepository->getPricesDames();
         $pricesKinderen = $pricesRepository->getPricesKinderen();

         require("../views/prijzen.php");

         $baseController->footer();

         
    }
}
