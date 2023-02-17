<?php
class ErrorController
{
    public function error()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         $baseController->body('error');
         $baseController->footer();

         $pricesRepository = new PriceRepository();

         $allPrices = $pricesRepository->getAll();
    }
}
