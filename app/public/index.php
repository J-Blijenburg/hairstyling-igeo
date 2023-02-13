<?php
require __DIR__ . '/../routing/SwitchRouter.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = new SwitchRouter();
$router->route($uri);