<?php
class BaseController
{

    public function header()
    {
        require("../views/header.php");
    }

    public function body($page)
    {
        require("../views/$page.php");
    }


    public function footer()
    {
        require("../views/footer.php");
    }
}