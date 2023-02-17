<?php
require_once("../repositories/PricesRepository.php");
class ProductController
{
    public function product()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         $baseController->body('product');
         $baseController->footer();

         $pricesRepository = new PriceRepository();

         $allPrices = $pricesRepository->getAll();
    }
}
