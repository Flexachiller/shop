<?php

namespace Drakosha\Shop\App\Core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require 'src\\App\\Config\\routes.php';
        
        foreach($arr as $key => $value)
        {
            $this->add($key, $value);
        }
    }

    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function check()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');

        foreach($this->routes as $route => $params)
        {
            if(preg_match($route, $url, $matches))
            {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    public function run()
    {
        if($this->check())
        {
            $controller = 'App\\Controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';
            if(class_exists($controller))
            {
                //
            }
            else
            {
                echo '404';
            }
        }
        else
        {
            echo '404';
        }
        
    }
}