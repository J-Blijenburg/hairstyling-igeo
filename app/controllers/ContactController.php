<?php
require_once("../repositories/OpeningHoursRepository.php");
class ContactController
{
    public function contact()
    {
         //The html page consist of multiple view. This is done to prevent duplicated code.
         $baseController =  new BaseController();
         $baseController->header();
         
         $openingHoursRepository = new OpeningHoursRepository();
         $allOpeningHours = $openingHoursRepository->getAll();

         require("../views/contact.php");
        $baseController->footer();
    }
}
