<?php
class ContactController
{
    public function contact()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         
         require("../views/contact.php");
        //  $baseController->footer();
    }
}
