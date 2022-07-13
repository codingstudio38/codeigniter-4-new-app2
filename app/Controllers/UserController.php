<?php

namespace App\Controllers;
use Config\Services;
use CodeIgniter\I18n\Time;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    private $login_user =null;
    public function __construct(){
        $this->login_user = session()->get('user_data');
    }
    public function index()
    {
         return view('users/dashboard');
    }

    public function user_profile(){
        return view('users/user_profile');
    }

    public function logout()
    { 
        $dataLog = $this->UserloginDetails->find($this->login_user['loginTBL_id']);
        $dataLog['logouttime'] = Time::now('Asia/Kolkata', 'en_US');
        $this->UserloginDetails->save($dataLog);
        $data = $this->Usertbl->find($this->login_user['user']['id']);
        $data['isloggedin'] = false;
        $this->Usertbl->save($data);
        $this->session->remove('user_data');
        $reaponse = [
            'status'  =>'success',
            'message' =>"Successfully loggout."
        ];
        $this->session->setFlashdata('reaponse',$reaponse);
        return redirect('user/user_login');
    } 








}
