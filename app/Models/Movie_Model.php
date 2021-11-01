<?php

namespace App\Models;

use CodeIgniter\Model;

class Movie_Model extends Model
{
    protected $table      = 'movie';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'shortdesc', 'rate', 'price', 'thumb'];
}
