<?php

namespace App\Models;

use CodeIgniter\Model;

class UserTbl extends Model
{
    protected $DBGroup             = 'default';
    protected $primaryKey           = 'id';
    protected $table                = 'user_tbl';
    protected $allowedFields        = ['picture','name','email','email_verified','phone','password','dob','gender','pincode','postoffice','district','state','country','address','isloggedin','access','user_agent','created_at','updated_at'];
    protected $useTimestamps        = true;
    protected $validationRules      = [];
    protected $validationMessages   = [];
}
