<?php
class HomeController
{
    public function home()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         $baseController->body('home');
         $baseController->footer();
    }
}
