<?php
class SwitchRouter
{
    public function route($uri)
    {
        require_once("../controllers/BaseController.php");

        switch ($uri) {
            case "/":
            case "/main":
                $controller = new MainController();
                $controller->main();
            default:
                http_response_code(404);
                break;
        }
    }
}
