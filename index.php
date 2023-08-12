<?php

require 'vendor/autoload.php';
require 'src/App/Lib/Develop.php';

use Drakosha\Shop\App\Core\Router;

session_start();

$router = new Router();
$router->run();