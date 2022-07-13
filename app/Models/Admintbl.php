<?php

namespace App\Models;

use CodeIgniter\Model;

class Admintbl extends Model
{
    protected $DBGroup             = 'default';
    protected $primaryKey           = 'id';
    protected $table                = 'admin_tbl';
    protected $allowedFields        = ['picture','name','email','phone','dob','gender','isloggedin','access','user_agent'];
    protected $useTimestamps        = true;
    protected $validationRules      = [];
    protected $validationMessages   = [];
}
