<?php

require 'vendor/autoload.php';
require 'src/Lib/Develop.php';

use Drakosha\Shop\Core\Router;

session_start();

$router = new Router();
$router->run();