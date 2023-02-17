<?php
class BaseController
{

    public function header()
    {
        require("../views/Header.php");
    }

    public function body($page)
    {
        require("../views/$page.php");
    }


    public function footer()
    {
        require("../views/Footer.php");
    }
}