<?php 

namespace App\Controllers;
use Config\Services;
use CodeIgniter\I18n\Time;
class Login extends BaseController
{
    private $login_user =null;
    public function __construct(){
        $this->login_user = session()->get('user_data');
    }
    public function index(){
         return view('index_view.php');
    }
    public function viewlogin()
    {
        return view('login');
    }
    public function viewregister()
    {
        return view('register');
    }
    public function emailCheck(){
        $email = $this->request->getPost('email');
        $query = $this->Usertbl->where(['email'=>$email])->get();
        $result = $query->getResultArray();
        if($result){
            $data = [
                'status'=> 400 ,
                'message'=>$email.' Id already exists..!!',
                'result'=>$result
            ];
            return json_encode($data);
            exit;
        } else {
            $data = [
                'status'=> 200 ,
                'message'=>'No records found..',
                'result'=>$result
            ];
            return json_encode($data);
            exit;
        }
    }
    public function phoneCheck(){
        $phone = $this->request->getPost('phone');
        $query = $this->Usertbl->where(['phone'=>$phone])->get();
        $result = $query->getResultArray();
        if($result){
            $data = [
                'status'=> 400 ,
                'message'=>$phone.' No already exists..!!',
                'result'=>$result
            ];
            return json_encode($data);
            exit;
        } else {
            $data = [
                'status'=> 200 ,
                'message'=>'No records found..',
                'result'=>$result
            ];
            return json_encode($data);
            exit;
        }
    }
    public function user_register(){
            $rules = [
                    'picture'    => [
                                        'uploaded[picture]',
                                        'mime_in[picture,image/jpg,image/jpeg,image/png,image/gif]',
                                        'max_size[picture,4096]',
                                    ],
                    'name'       =>'required',
                    'email'      =>'required|valid_email|is_unique[user_tbl.email]',
                    'phone'      =>'required|min_length[10]|max_length[10]|is_unique[user_tbl.phone]',
                    'dob'        =>'required',
                    'gender'     =>'required',
                    'pincode'    =>'required',
                    'postoffice' =>'required',
                    'district'   =>'required',
                    'state'      =>'required',
                    'country'    =>'required',
                    'address'    =>'required'
            ];
            $messages = [
                "picture" => [
                    "uploaded" => "Profile picture required..!!",
                    "mime_in"  => "Profile picture type JPG,PNG..!!",
                    "max_size" => "Profile picture max size is 4 MB..!!"
                ],
                "name" => [
                    "required" => "Name required..!!"
                ],
                "email" => [
                    "required"    => "Email required..!!",
                    "valid_email" => "Invalid email id..!!",
                    "is_unique"   => "Email allready exists..!!"
                ],
                "phone" => [
                    "required"   => "Phone number required..!!",
                    "min_length" => "Phone number should be 10 digit..!!",
                    "max_length" => "Phone number should be 10 digit..!!",
                    "is_unique"  => "Phone number already exists..!!"
                ],
                "dob" => [
                    "required" => "Name required..!!"
                ],
                "gender" => [
                    "required" => "Name required..!!"
                ],
                "pincode" => [
                    "required" => "Name required..!!"
                ],
                "postoffice" => [
                    "required" => "Name required..!!"
                ],
                "district" => [
                    "required" => "Name required..!!"
                ],
                "state" => [
                    "required" => "Name required..!!"
                ],
                "country" => [
                    "required" => "Name required..!!"
                ],
                "address" => [
                    "required" => "Name required..!!"
                ]
            ];
            if(!$this->validate($rules, $messages)){
                $validate=$this->validator->listErrors();
                session()->setFlashdata('errors', $validate); 
                return redirect('user_register')->withInput();
            } else {
                $name = trim($this->request->getPost('name'));
                $email = trim($this->request->getPost('email'));
                $phone = trim($this->request->getPost('phone'));
                $ex_dob = explode('-',$this->request->getPost('dob'));
                $password = $phone."@".$ex_dob[0];
                $dob = $this->request->getPost('dob');
                $gender = trim($this->request->getPost('gender'));
                $pincode = trim($this->request->getPost('pincode'));
                $postoffice = trim($this->request->getPost('postoffice'));
                $district = $this->request->getPost('district');
                $state = $this->request->getPost('state');
                $country = $this->request->getPost('country');
                $address = $this->request->getPost('address');
                $data = [
                    'name'=>$name,
                    'email'=>$email,
                    'email_verified'=>false,
                    'phone'=>$phone,
                    'password'=>password_hash($password, PASSWORD_DEFAULT),
                    'dob'=>$dob,
                    'gender'=>$gender,
                    'pincode'=>$pincode,
                    'postoffice'=>$postoffice,
                    'district'=>$district,
                    'state'=>$state,
                    'country'=>$country,
                    'address'=>$address,
                    'isloggedin' => false,
                    'access'=>'denied',
                    'user_agent'=>$this->request->getUserAgent(),
                    'created_at'=>date('Y-m-d'),
                    'updated_at'=>NULL
                ];
                $insert = $this->Usertbl->save($data);
            if($insert){
                $user_id = $this->Usertbl->getInsertID(); 
                if($this->request->getFile('picture')){
                    $file = $this->request->getFile('picture');
                    $filename = rand()."_".$user_id."_".$file->getSize().".".$file->getClientExtension();
                    $tempfile = $file->getTempName();
                    $ext = $file->getClientExtension();
                    $type = $file->getClientMimeType();
                    if($file->move('assets/users/', $filename)){
                        $update = $this->Usertbl->where(['id'=>$user_id])->first();
                        $update['picture'] = $filename;
                        $update_result = $this->Usertbl->save($update);  
                        if($update_result){
                            $reaponse = [
                                'status'   =>'success',
                                'message'  =>'Account has ben successfully created. Check your email and active your account.',
                                'password' => $password,
                                'email' => $email,
                                'email_encode' => base64_encode($email),
                                'user_id' => base64_encode($user_id)
                            ];
                            return redirect('user_register')->with('reaponse',$reaponse);
                        } else {
                            $this->Usertbl->whereIn('id',$user_id)->delete();
                            $reaponse = [
                                'status'  =>'failed',
                                'message' =>'Failed to upload..!!'
                            ];
                            return redirect('user_register')->with('reaponse',$reaponse);
                        }
                    } else {
                        $this->Usertbl->whereIn('id',$user_id)->delete();
                            $reaponse = [
                                'status'  =>'failed',
                                'message' =>'Failed to move file..!!'
                            ];
                            return redirect('user/user_register')->with('reaponse',$reaponse);
                    }
                }
            } else {
                $reaponse = [
                    'status'  =>'failed',
                    'message' =>'Failed to upload..!!'
                ];
                return redirect('user/user_register')->with('reaponse',$reaponse);
            }
        }
    }

    function user_email_active($type = null, $id=null){
        $email = base64_decode($type);
        $id = base64_decode($id);
        $update = $this->Usertbl->where('id =',$id)->Where('email=',$email)->first();
        if($update == null){
            $reaponse = [
                'status'  =>'failed',
                'message' =>'Failed to verify. Unknown user..!!'
            ];
            return redirect('user_login')->with('reaponse',$reaponse);
        } else {
        $update['email_verified'] = true;
        $update_result = $this->Usertbl->save($update); 
            if($update_result){
                $reaponse = [
                    'status'  =>'success',
                    'message' =>'Email id has been successfully verified. Login.'
                ];
                return redirect('user/user_login')->with('reaponse',$reaponse);
            } else {
                $reaponse = [
                    'status'  =>'failed',
                    'message' =>'Failed to verify. Unknown error..!!'
                ];
                return redirect('user/user_login')->with('reaponse',$reaponse);
            }
        }
    }

     public function login_verify() {
        //php spark migrate:file "app\Database\Migrations\2022-04-15-151607_Userlogindetails.php"
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $rules = [
                'email'  =>'required|valid_email',
                'password' =>'required|min_length[8]|max_length[15]'
            ];
        $messages = [
                "email" => [
                    "required"    => "Email is required..!!",
                    "valid_email" => "Invalid email id..!!",
                    ],
                "password" => [
                    "required" => "Password required..!!",
                    "min_length" => "Password should be 8 digit..!!",
                    "max_length" => "Password should be 8 digit..!!",
                    ]
            ]; 
        if(!$this->validate($rules, $messages)){
                $validate=$this->validator->listErrors();
                session()->setFlashdata('errors', $validate); 
                return redirect('user/user_login')->withInput();
        } else {
            $query = $this->Usertbl->where('email=',$email)->where('email_verified=',true)->get();
            $result = $query->getRow();
            if($result == NULL){
                $reaponse = [
                    'status'  =>'failed',
                    'message' =>"Email id doesn't exist..!!"
                ];
                $this->session->setFlashdata('reaponse',$reaponse);
                return redirect('user/user_login');
            } else {
                $varify = password_verify($password,$result->password);
                if($varify == true){
                    if($result->access=="denied"){
                        $reaponse = [
                            'status'  =>'failed',
                            'message' =>"Account not approved..!! Wait for admin approval."
                        ];
                        $this->session->setFlashdata('reaponse',$reaponse);
                        return redirect('user_login');
                    } else {
                        $dataUser = $this->Usertbl->find($result->id);
                        $dataUser['isloggedin'] = true;
                        $this->Usertbl->save($dataUser);
                        $datalog = [
                            'login_id' => $result->id,
                            'logintime' => Time::now('Asia/Kolkata', 'en_US'),
                            'logouttime' => null,
                            'system' => $_SERVER['HTTP_USER_AGENT']
                        ];
                        $this->UserloginDetails->save($datalog);
                        $userData = [
                            'loginTBL_id'=>$this->UserloginDetails->insertID(),
                            'user'=> $dataUser,
                            'isLoggedIn'=> true
                        ];
                        $reaponse = [ 
                                'status'  =>'success',
                                'message' =>"Successfully loggin.."
                        ];
                        $this->session->set('user_data',$userData);
                        $this->session->setFlashdata('reaponse',$reaponse);
                        return redirect('user_panel');
                    }
                } else {
                    $reaponse = [
                        'status'  =>'failed',
                        'message' =>"LogIn Failed..!!"
                    ];
                    $this->session->setFlashdata('reaponse',$reaponse);
                    return redirect('user/user_login');
                }
            }
        }
    }
  
 
} 
 