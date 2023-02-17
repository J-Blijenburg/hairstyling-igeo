<?php
require_once("../repositories/PricesRepository.php");
class MainController
{
    public function main()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         $baseController->body();
         $baseController->footer();

         $pricesRepository = new PriceRepository();

         $allPrices = $pricesRepository->getAll();
    }
}
