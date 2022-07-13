<?php 
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class LoggedIn implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$session = Services::session();
		if($session->has('user_data')){
			$user = $session->get('user_data');
			if(!$user['user']){
				$reaponse = [
	                'status'  =>'failed',
	                'message' =>"You are not loggedin..!!"
	            ];
	            $session->setFlashdata('reaponse',$reaponse);
	            session()->remove('user_data');
	            return redirect('user/user_login');
			} else {
				return true;
			}
		} else {
			$reaponse = [
                'status'  =>'failed',
                'message' =>"You are not loggedin..!!"
            ];
            $session->setFlashdata('reaponse',$reaponse);
            session()->remove('user_data');
            return redirect('user/user_login');
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{

	}

	
}

?>