<?php
require_once("../repositories/PricesRepository.php");
require_once("../repositories/CarouselRepository.php");
class HomeController
{
    public function home()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();

         //home needs to show the prices, so will get the prices repo
         $pricesRepository = new PriceRepository();
         //home uses a carousel with pictures out the database, so we need the repo
         $carouselRepository = new CarouselRepository();
        $imageCarousel = $carouselRepository->getAll();

        //to seperate the prices for heren and dames we seperate them when loading them in from the database
         $pricesHeren = $pricesRepository->getPricesHeren();
         $pricesDames = $pricesRepository->getPricesDames();
         $pricesKinderen = $pricesRepository->getPricesKinderen();

         require("../views/home.php");

         $baseController->footer();

         
    }
}
