<?php
class SwitchRouter
{
    public function route($uri)
    {
        require_once("../controllers/BaseController.php");
        switch ($uri) {
            case "/":
            case "/home":
                require("../controllers/HomeController.php");
                $controller = new HomeController();
                $controller->home();
                break;
            case "/product":
                require("../controllers/ProductController.php");
                $controller = new ProductController();
                $controller->product();
                break;
            case "/contact":
                require("../controllers/ContactController.php");
                $controller = new ContactController();
                $controller->contact();
                break;
            case "/prijzen":
                require("../controllers/PriceController.php");
                $controller = new PriceController();
                $controller->prijzen();
                break;
            default:
                require("../controllers/ErrorController.php");
                $controller = new ErrorController();
                $controller->error();
                break;
        }
    }
}
