<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hairstyling Igeo</title>
    <style>
        <?php
        require("../public/css/header.css");
        require("../public/css/home.css");
        require("../public/css/product.css");
        require("../public/css/prijzen.css");
        require("../public/css/footer.css");
        require("../public/css/contact.css");
        ?>
    </style>
</head>
<?php
function active($currect_page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'navActive'; //class name in css 
    }
}
?>

<body>
    <header class="header">
        <div class="headerLogo">
            <a href="/home">
                <img width="100%" src="/images/header/logov2.png" alt="Image is not shown">
            </a>
            <nav class="navigation">
                <ul class="navigation">
                    <div class="navLeft">
                        <li class="navigation <?php active('home'); ?>">
                            <a class="navigation <?php active('home'); ?>" href="/home">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="navigation <?php active('product'); ?>">
                            <a class="navigation <?php active('product'); ?>" href="/product">
                                <h5>Maria Nila</h5>
                            </a>
                        </li>
                    </div>
                    <div class="navRight">
                        <li class="navigation <?php active('prijzen'); ?>">
                            <a class="navigation <?php active('prijzen'); ?>" href="/prijzen">
                                <h5>Prijzen</h5>
                            </a>
                        </li>
                        <li class="navigation <?php active('contact'); ?>">
                            <a class="navigation <?php active('contact'); ?>" href="/contact">
                                <h5>Contact</h5>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
        <div class="mobileHamburger">
            <a id="headerImage" href="/home">
                <img width="100%" src="/images/header/logov2.png" alt="Image is not shown">
            </a>
            <section class="hamburgerNavBar">
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                    <div class='menu-button'></div>
                </label>
                <ul class="menu">
                    
                    <li onclick="location.href='/home'"> Home</li>
                    <li onclick="location.href='/product'"> Maria Nila</li>
                    <li onclick="location.href='/prijzen'"> Prijzen</li>
                    <li onclick="location.href='/contact'"> Contact</li>

                </ul>
            </section>
        </div>
    </header>