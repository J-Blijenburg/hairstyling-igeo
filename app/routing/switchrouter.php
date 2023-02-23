<?php
class SwitchRouter
{
    public function route($uri)
    {
        require_once("../controllers/BaseController.php");
        switch ($uri) {
            // by none or home give homepage
            case "/":
            case "/home":
                require("../controllers/HomeController.php");
                $controller = new HomeController();
                $controller->home();
                break;
            // by product give productpage
            case "/product":
                require("../controllers/ProductController.php");
                $controller = new ProductController();
                $controller->product();
                break;
            // by contact give contactpage
            case "/contact":
                require("../controllers/ContactController.php");
                $controller = new ContactController();
                $controller->contact();
                break;
            // by prijzen give prijzenpage
            case "/prijzen":
                require("../controllers/PriceController.php");
                $controller = new PriceController();
                $controller->prijzen();
                break;
            // by none of the above go give error page
            default:
                require("../controllers/ErrorController.php");
                $controller = new ErrorController();
                $controller->error();
                break;
        }
    }
}
