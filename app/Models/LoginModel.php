<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'dt_admin';
    protected $primaryKey       = 'id_admin';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'password'];
}
