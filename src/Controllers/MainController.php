<?php

namespace Drakosha\Shop\Controllers;

use Drakosha\Shop\Core\Controller;
use Drakosha\Shop\Lib\Db;

class MainController extends Controller
{

    public function indexAction()
    {
        $result = $this->model->getProducts();


        $vars = [
            'products' => $result
        ];
        
        $this->view->render('Главная страница', $vars);
    }


}