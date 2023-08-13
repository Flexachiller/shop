<?php

namespace Drakosha\Shop\Controllers;

use Drakosha\Shop\Core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        $this->view->render('Регистрация');
    }

}