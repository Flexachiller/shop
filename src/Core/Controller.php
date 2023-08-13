<?php

namespace Drakosha\Shop\Core;

abstract class Controller
{
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

}