<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php
        require("../public/css/footer.css");
        ?>
    </style>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hairstyling Igeo</title>

    <style>
        div.navigation {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        /* nav.navigation {
            
        } */
        ul.navigation {
            background-color: #72A5CD;
            list-style-type: none;
            overflow: hidden;
        }

        li.navigation {
            float: left;
        }

        a.navigation {
            color: white;
            display: block;
            padding: 8px;
            text-align: center;
            text-decoration: none;
        }

        li a:hover {
            background-color: #CEDFED;
            color: black;
        }

        li:last-child {
            float: right;
        }
    </style>
</head>

<body>
    <header>
        <div class="navigation">
            <nav class="navigation">
                <ul class="navigation">
                    <li class="navigation">
                        <a class="navigation" href="/home">Home</a>
                    </li>
                    <li class="navigation">
                        <a class="navigation" href="/product">Maria Nila</a>
                    </li>
                    <li class="navigation">
                        <a class="navigation" href="/home">
                            <img src="../public/images/logo.png">
                        </a>
                    </li>
                    <li class="navigation">
                        <a class="navigation" href="/contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>