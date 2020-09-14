<?php /**
 * 
 */
class Comments extends Ci_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('comments_model','post_model'));
		$this->load->library('form_validation');
	}
	public function create($post_id){
		$slug = $this->input->post('slug');
		$data['post'] = $this->post_model->get_posts($slug);
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('body','Body','required');

		if ($this->form_validation->run()=== false) 
		{
			$this->load->view('templates/header');
			$this->load->view('posts/view',$data);
			$this->load->view('templates/footer');
			# code...
		}
		else{
			$this->comments_model->create_comment($post_id);
			redirect('post/'.$slug);

		}

	}
} ?>