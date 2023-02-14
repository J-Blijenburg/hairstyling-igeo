<?php
class BaseController
{

    public function header()
    {
        require("../views/Header.php");
    }

    public function body()
    {
        require("../views/Body.php");
    }


    public function footer()
    {
        require("../views/Footer.php");
    }
}