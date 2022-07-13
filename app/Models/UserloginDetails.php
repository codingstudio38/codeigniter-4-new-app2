<?php

namespace App\Models;

use CodeIgniter\Model;

class UserloginDetails extends Model
{
    protected $DBGroup             = 'default';
    protected $primaryKey           = 'id';
    protected $table                = 'user_login_details';
    protected $allowedFields        = ['login_id','logintime','logouttime','system'];
    protected $useTimestamps        = false;
    protected $validationRules      = [];
    protected $validationMessages   = [];
}
