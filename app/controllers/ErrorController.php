<?php
class ErrorController
{
    public function error()
    {
        //The html page consist of multiple view. This is done to prevent duplicated code.
        $baseController =  new BaseController();
        $baseController->header();
        require("../views/error.php");
        $baseController->footer();
    }
}