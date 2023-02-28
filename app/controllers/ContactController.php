<?php
require_once("../repositories/OpeningHoursRepository.php");
class ContactController
{
    public function contact()
    {
        //The html page consist of multiple view. This is done to prevent duplicated code.
        $baseController =  new BaseController();
        $baseController->header();
         
        //contactpage needs the openinghours repo, for the loading of all hours
        $openingHoursRepository = new OpeningHoursRepository();
        $allOpeningHours = $openingHoursRepository->getAll();
        $allOpeningsHours = $openingHoursRepository->getAll();

        require("../views/contact.php");
        $baseController->footer();
    }
}