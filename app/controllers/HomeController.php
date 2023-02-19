<?php
require_once("../repositories/PricesRepository.php");
class HomeController
{
    public function home()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();

         $pricesRepository = new PriceRepository();

         $pricesHeren = $pricesRepository->getPricesHeren();
         $pricesDames = $pricesRepository->getPricesDames();
         $pricesKinderen = $pricesRepository->getPricesKinderen();

         require("../views/home.php");

         $baseController->footer();

         
    }
}
