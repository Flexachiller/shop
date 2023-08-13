<?php

namespace Drakosha\Shop\Models;

use Drakosha\Shop\Core\Model;

class Main extends Model
{
    public function getProducts()
    {
        $result = $this->db->row('SELECT title, `text` FROM products');

        return $result;
    }

    
}