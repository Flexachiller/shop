<?php

namespace Drakosha\Shop\Controllers;

use Drakosha\Shop\Core\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $vars = [
            'name' => 'Вася',
            'age' => 3
        ];
        $this->view->render('Главная страница', $vars);
    }


}