<?php

namespace Drakosha\Shop\Core;

use Drakosha\Shop\Lib\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db;
    }
}