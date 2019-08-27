<?php 

class LoginCtrl extends CI_Controller{
	private $data;
	private $user_session_id;

	public function __construct(){
		parent:: __construct();
		$this->load->database();


		$this->load->model('LoginModel');

		$this->user_session_id = $this->session->userdata('session_id');
	 	// select specific user details
	 	$this->data['user_data'] = $this->LoginModel->select_userID('uid, role', $this->user_session_id);
	 	if ($this->user_session_id != "") {
	 		switch ($this->data['user_data']['role']) {
	 			case 0:
	 				redirect('dashboard');
	 				break;
	 				
	 			// set another case for each role, so that this page will validate where url belong

	 			default:
	 				# code...
	 				break;
	 		}
	 	}

	}

	public function login(){

		$this->load->view('auth/login', $this->data);
	}

	public function login_auth(){
		if($_POST['action'] == 'submit'){
			$user 	=	$this->input->post('user');
			$pass 	=	$this->input->post('pass');

			$result 	=	$this->LoginModel->login_auth('uid, user, pass, role', $user);

			if($result != false)
			{
				if(password_verify($pass, $result['pass']))
				{	
					// this will be set session_id as global variable for session
					$this->session->set_userdata(array('session_id' => $result['uid']));

					// for routing different kind of user try try
					switch($result['role']) {
						case 0:

							$title = 'Successfully Login';
							$status = 'success';
							$message = 'Wait we redirecting you to dashboard';
							$url = 'dashboard';

							
						break;

						default:
							$status = 'warning';
							$url = '';
							$message = 'Invalid Location';
						break;
					}

				}
				else
				{
					$title = 'Password Invalid';
					$status = 'warning';
					$message = 'Check Password';
					$url = 'login';
				}
			}
			else
			{
				$title = 'Username Invalid';
				$status = 'warning';
				$message = 'Check username';
				$url = 'login';
			}

     		echo json_encode(array('title' => $title, 'status' => $status, 'url' => $url, 'message' => $message));
		}
	}
}