<?php

namespace Drakosha\Shop\Core;

class View
{
    public $route;
    public $path;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);

        $path = 'src/Views/' . $this->path . '.php';

        if(file_exists($path))
        {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'src/Views/layouts/' . $this->layout . '.php';
        }
        else
        {
            View::errorCode(404);
        }
    }

    public static function errorCode($code)
    {
        http_response_code($code);

        $path = 'src/Views/errors/' . $code . '.php';

        if(file_exists($path)) { require $path; }
        
        die();
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        die();
    }

}