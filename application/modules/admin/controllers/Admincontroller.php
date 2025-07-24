<?php 
 /**
  * 
  */
 class Admincontroller extends MX_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Admin_model');
 		$this->load->model('Tag_mod');
 	}

 	public function index($value='')
 	{
 		if (is_logged()) {
			redirect('admin/dashboard','location',301);
		}
 		$data['tags'] = $this->Tag_mod->get_page_tags('admin_login');
 		$this->load->view('index', $data);
 	}

 	public function change_password($value='')
 	{
 		if (!is_logged()) {
			redirect('admin','location',301);
		}
 		$this->load->view('change-password');
 	}

 	public function loginAction($value='')
 	{
 		try {

 			if ($request = $this->input->post()) {

 				$email = $request['email'];
 				$password = $request['password'];
 				$user = $this->Admin_model->login($email);

 				if ($user) {
 					if ($user->password === $password) {
 						$token = generate_token(['email'=>$email,'name'=>$user->name]);
 						$data = [
 							'admin_token' => $token,
 							'email' => $email
 						];

 						$this->session->set_userdata($data);
 						return $this->output->set_status_header(Http::OK)
						->set_content_type('application/json')
						->set_output(json_encode([
						'status' => Http::OK,
						'message' => 'Login successfully.',
						]));
 					}else{
 						return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => "Invalid email or password!"
					    ]));
 					}
 				}else{
 					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Invalid email or password!"
				    ]));
 				}
 				
 			}else{
 				return $this->output->set_status_header(Http::BAD_REQUEST)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::BAD_REQUEST,
			    'message' => "Invalid Request access denied"
			    ]));
 			}
 			
 		} catch (Exception $e) {
 			return $this->output->set_status_header(Http::BAD_REQUEST)
		    ->set_content_type('application/json')
		    ->set_output(json_encode([
		    'status' => Http::BAD_REQUEST,
		    'message' => $e
		    ]));
 			
 		}
 	}

 	public function logout($value='')
 	{
 		if (session_destroy()) {
 			redirect('admin','location',301);
 		}

 	}
 }

?>