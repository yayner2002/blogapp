<?php /**
 * 
 */
class Categories extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('category_model','post_model'));
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function index(){
		$data['title'] = 'List of Categories';
		$data['Categories'] = $this->category_model->get_categories();
			$this->load->view('templates/header');
			$this->load->view('Categories/index',$data);
			$this->load->view('templates/footer');

	}
	public function create()
	{
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
			$data['title'] = 'Add Category';
			$this->form_validation->set_rules('name','Category Name','required');

		if ($this->form_validation->run() === false) {

			$this->load->view('templates/header');
			$this->load->view('Categories/create',$data);
			$this->load->view('templates/footer');
		}
		else{

			$this->category_model->create_category();
			$this->session->set_flashdata('category_created','Category  Successfully Created');
			redirect('categories');
	        }
	} 
	public function posts($id){
		$data['title'] = $this->category_model->get_category($id)->name;
		// print_r($data['title']);
		$data['posts'] = $this->post_model->get_posts_by_category($id);
		$this->load->view('templates/header');
			$this->load->view('posts/index',$data);
			$this->load->view('templates/footer');
		}
	public function delete($id)
		{
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
		$this->category_model->delete_category($id);
		$this->session->set_flashdata('category_deleted','Category Has been   Successfully Deleted');
		redirect('categories');
		
	}

	

} ?>