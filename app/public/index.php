<!--

__/\\\\\\\\\\\\_____/\\\\\\\\\\\\\\\____________/\\\________________/\\\\\\\\\\\__/\\\\\\\\\\\\\___        
 _\/\\\////////\\\__\////////////\\\____________\/\\\_______________\/////\\\///__\/\\\/////////\\\_       
  _\/\\\______\//\\\___________/\\\/_____________\/\\\___________________\/\\\_____\/\\\_______\/\\\_      
   _\/\\\_______\/\\\_________/\\\/_______________\///____________________\/\\\_____\/\\\\\\\\\\\\\\__     
    _\/\\\_______\/\\\_______/\\\/_________________________________________\/\\\_____\/\\\/////////\\\_    
     _\/\\\_______\/\\\_____/\\\/____________________/\\\___________________\/\\\_____\/\\\_______\/\\\_   
      _\/\\\_______/\\\____/\\\/_____________________\/\\\____________/\\\___\/\\\_____\/\\\_______\/\\\_  
       _\/\\\\\\\\\\\\/____/\\\\\\\\\\\\\\\___________\/\\\___________\//\\\\\\\\\______\/\\\\\\\\\\\\\/__ 
        _\////////////_____\///////////////____________\///_____________\/////////_______\/////////////____
-->

<!-- ones websites opens immediately redirects to SwitchRouter -->
<?php

echo file_exists("../routing/switchrouter.php");

require __DIR__ . '../routing/switchrouter.php';

$url = $_SERVER['REQUEST_URI'];

$router = new SwitchRouter();
$router->route($url);