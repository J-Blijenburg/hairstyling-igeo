<?php
class SwitchRouter
{
    public function route($uri)
    {

        switch ($uri) {
            case "/":
            case "/main":
                require("../controllers/MainController.php");
                $controller = new MainController();
                $controller->main();
            default:
                http_response_code(404);
                break;
        }
    }
}
