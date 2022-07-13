<?php 
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class GuestFilter implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$session = Services::session();
		$user = $session->has('user_data') ? $session->get('user_data') : false;
		if($user){
			$reaponse = [
	                        'status'  =>'success',
	                        'message' =>"You are already loggedin.."
                        ];
			$session->setFlashdata('reaponse',$reaponse);
			return redirect('user_panel');
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{

	}

	
}

?>