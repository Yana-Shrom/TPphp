<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

session_start();

$router = new Router();
$router->handleRequest();


?>
<link rel="stylesheet" href="/css/style.css">