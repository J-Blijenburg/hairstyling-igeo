<?php
class BaseController
{
    // each page automatically gets the header and a footer
    public function header()
    {
        require("../views/header.php");
    }


    public function footer()
    {
        require("../views/footer.php");
    }
}