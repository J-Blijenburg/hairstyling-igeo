<?php
class BaseController
{

    public function header()
    {
        require("../views/header.php");
    }

    public function body()
    {
        require("../views/body.php");
    }


    public function footer()
    {
        require("../views/footer.php");
    }
}