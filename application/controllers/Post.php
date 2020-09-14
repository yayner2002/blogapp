<?php 
class Post extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url','form'));
		$this->load->model(array('post_model','comments_model'));
		$this->load->library(array('form_validation','pagination'));
		# code...
	}
	public function index($offset = false){
		$config['base_url'] = base_url().'post/index/';
		$config['total_rows'] = $this->db->count_all('posts');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

       $this->pagination->initialize($config);


		$data['title'] = "Latest Posts";
		 
		$data['posts'] = $this->post_model->get_posts(false, $config['per_page'],$offset); 

		// print_r($data['posts']);
		// array('title'=>'Latest Posts',
	                  // 'posts'=>$posts);
		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}
	public function view($slug = null)
	{
		$data['post'] = $this->post_model->get_posts($slug);
		// print_r($data['post']);
		$post_id = $data['post']['id'];
		$data['comments'] = $this->comments_model->get_comments($post_id);

		if (empty($data['post'])) {
			show_404();
			# code...
		}
		// print_r($data['title']);

		// $data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}
	public function create()
	{
		// check user if login before creating a post
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
		$data['title'] = "Create New Post";
		$data['categories'] = $this->post_model->get_categoris();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');
		$this->form_validation->set_rules('category','Category','required');
		if ($this->form_validation->run() ===false) {
		$this->load->view('templates/header');
		$this->load->view('posts/create',$data);
		$this->load->view('templates/footer');
		}
		else{
			$config['upload_path']          = './uploads/images/post';
                $config['allowed_types']        ='gif|jpg|png';
                $config['max_size']             = '11000';
                $config['max_width']            = '12000';
                $config['max_height']           = '17688';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        $post_image = 'noimage.jpg';

                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       $post_image = $_FILES['userfile']['name'];
                }

			$this->post_model->create_post($post_image);
			$this->session->set_flashdata('post_created','Post  Successfully Created');
			redirect('posts/latest');
		}
		 
	}
	public function delete($id){
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
		$this->post_model->delete_post($id);
		$this->session->set_flashdata('post_deleted','Your Post Has Been Successfully Deleted');
		redirect('posts/latest');
		
	}
	public function edit($slug){
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
		$data['post'] = $this->post_model->get_posts($slug);
		if ($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']) {
			redirect('posts/latest');


			
		}
		$data['categories'] = $this->post_model->get_categoris();


		// print_r($data['post']);

		if (empty($data['post'])) {
			show_404();
			# code...
		}
		// print_r($data['title']);

		$data['title'] = 'Edit Post';

		$this->load->view('templates/header');
		$this->load->view('posts/edit',$data);
		$this->load->view('templates/footer');

	}
	public function update(){
		if (!$this->session->userdata('loggedin')) {
			redirect('users/login');
		}
		$this->post_model->update_post();
		$this->session->set_flashdata('post_updated','Post Successfully Updated');
		redirect('posts/latest');
		// echo "succesfully updated";

	}
	public function get_categoris(){
		$data['categories'] = $this->post_model->get_categoris();

	}

	

} 
?>