<?php
class BaseController
{

    public function header()
    {
        require("../views/Header.php");
    }

    public function body()
    {
        require("../views/home.php");
    }


    public function footer()
    {
        require("../views/Footer.php");
    }
}