<?php
class SwitchRouter
{
    public function route($uri)
    {
        require_once("../controllers/BaseController.php");
        switch ($uri) {
            case "/":
            case "/home":
                require("../controllers/MainController.php");
                $controller = new MainController();
                $controller->main();
                break;
            default:
                http_response_code(404);
                break;
        }
    }
}
