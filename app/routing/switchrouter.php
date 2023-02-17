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
            case "/product":
                require("../controllers/ProductController.php");
                $controller = new ProductController();
                $controller->product();
            case "/contact":
                require("../controllers/ContactController.php");
                $controller = new ContactController();
                $controller->contact();
            default:
                require("../controllers/ErrorController.php");
                $controller = new ErrorController();
                $controller->error();
                break;
        }
    }
}
