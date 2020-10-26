<?php

namespace Source\Models;

use Source\Core\Model;

class Room extends Model
{
    public function __construct()
    {
        parent::__construct("room", ["id"], ["name"]);
    }
}