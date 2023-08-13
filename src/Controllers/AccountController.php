<?php

namespace Drakosha\Shop\Controllers;

use Drakosha\Shop\Core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['login']) && !empty($_POST['password']))
            {
                
            }
            else
            {
                exit('Заполните все поля');
            }
        }

        $this->view->render('Вход');
    }

    public function registerAction()
    {
        $this->view->render('Регистрация');
    }

}