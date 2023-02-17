<?php
require_once("../repositories/PricesRepository.php");
class ProductController
{
    public function product()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         $pricesRepository = new PriceRepository();

         $allPrices = $pricesRepository->getAll();

         require("../views/product.php");
         $baseController->footer();

    }
}
