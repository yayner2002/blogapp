<?php /**
 * 
 */
class Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->model('user_model');

	}
	public function register()
	{
		$data['title'] = "Sign Up";
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('zipcode','Zip Code','required');
		
		$this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
		$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2','Confirm Password','matches[password]');
		if ($this->form_validation->run()===FALSE) 
		{
			$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');
			
		}
		else
		{
			// die('success');
			// encript password
			$enc_pass = md5($this->input->post('password'));
			$this->user_model->register($enc_pass);
			$this->session->set_flashdata('user_registered','Registered Successfully');

			redirect('posts/latest');

		}

	}
	public function login()
	{
		$data['title'] = "Sign In";
		
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if ($this->form_validation->run()===FALSE) 
		{
			$this->load->view('templates/header');
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');
			
		}
		else
		{
			// die('success');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$user_id = $this->user_model->login($username,$password);
		
			if($user_id)
			{
				// session
				$user_data = array('user_id'=>$user_id,
			                        'username'=>$username,
			                         'loggedin'=>true);
				$this->session->set_userdata($user_data);

					$this->session->set_flashdata('user_loggedin',' User Has Been Successfully Loggedin');
					redirect('posts/latest');
			}
				else
				{
					// error_log(message

					$this->session->set_flashdata('login_failed',' Login Failed!');
					redirect('users/login');
				
				}
		}
			

	}
	// logout
	public function logout(){
		// unset userdata
		$this->session->unset_userdata('loggedin');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
				$this->session->set_flashdata('user_loggedout',' You Are Now Logged Out Good Bye!');
					redirect('users/login');
				

	}
	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists','That username is already taken, please try a new one');
		if ($this->user_model->check_username_exists($username)) {
			return true;
			# code...
		}
		else{
			return false;
		}


	}
	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists','That Email is already taken, please try a new one');
		if ($this->user_model->check_email_exists($email)) {
			return true;
			# code...
		}
		else{
			return false;
		}


	}
} ?>