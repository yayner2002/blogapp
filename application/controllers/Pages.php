<?php /**
 * 
 */
class Pages extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library("user_agent");
		$this->load->helper('url');
	}
	public function view($page = 'home'){
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
			# code...
		}
		$data['title']= ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');
 

	}
	public function index($page = 'dashboard'){
		$this->load->view('templates/dash');
		
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	

	}
} ?>