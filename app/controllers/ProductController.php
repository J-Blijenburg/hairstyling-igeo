<?php
require_once("../repositories/ProductRepository.php");
class ProductController
{
    public function product()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();

        //we need the maria nila products on the page, so we load them from database using the repo
         $productRepository = new ProductRepository();
         $allProducts = $productRepository->getAll();
         require("../views/product.php");
         $baseController->footer();

    }
}
