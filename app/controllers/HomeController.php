<?php
require_once("../repositories/PricesRepository.php");
require_once("../repositories/ProductRepository.php");
class HomeController
{
    public function home()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();

         $pricesRepository = new PriceRepository();
         $productRepository = new ProductRepository();
         $singleGroupProduct = $productRepository->getGroupProducts();

         $pricesHeren = $pricesRepository->getPricesHeren();
         $pricesDames = $pricesRepository->getPricesDames();
         $pricesKinderen = $pricesRepository->getPricesKinderen();

         require("../views/home.php");

         $baseController->footer();

         
    }
}
