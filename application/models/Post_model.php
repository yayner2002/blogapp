<?php /**
 * 
 */
class Post_model extends CI_Model
{
	
	function __construct()

	{
		parent::__construct();

		$this->load->database();
		
	}
	public function get_posts($slug = false, $limit = false, $offset = false)
	{
		if ($limit) {
			$this->db->limit($limit, $offset);

			# code...
		}
		if ($slug === false) {
			$this->db->order_by('posts.id','desc');
			$this->db->join('categories','categories.id=posts.category_id');
			$query  = $this->db->get("posts");
			return $query->result_array();
			
		}
		$query  = $this->db->get_where("posts",array('slug'=>$slug));
		return $query->row_array();
		// $this->db->select("*");
  //   	$this->db->from("posts");
  //   	$query = $this->db->get_where('posts',array('slug'=>$slug));
  //   	// print_r($query);
  //   	return $result = $query->row_array();


	}
	public function create_post($post_image){
		$slug= url_title($this->input->post('title'));
		$data = array('title'=>$this->input->post('title'),
	                  'slug'=>$slug,
	                  'body'=>$this->input->post('body'),
	                  'category_id'=>$this->input->post('category'),
	                  'user_id'=>$this->session->userdata('user_id'),
	                  'post_image'=>$post_image
	              );
		return $this->db->insert('posts',$data);


	}
	public function delete_post($id){
		$this->db->where('id',$id);
		$this->db->delete('posts');
		return true;

	}
	public function update_post(){
		$slug= url_title($this->input->post('title'));
		$data['categories'] = $this->post_model->get_categoris();
		$data = array('title'=>$this->input->post('title'),
	                  'slug'=>$slug,
	                  'body'=>$this->input->post('body'),
	                  'category_id'=>$this->input->post('category')
	              );
		$this->db->where('id',$this->input->post('id'));

		return $this->db->update('posts',$data);
	}
	public function get_categoris(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();

	}
	public function get_posts_by_category($id){
		$this->db->order_by('posts.id','desc');
			$this->db->join('categories','categories.id=posts.category_id');
			$query  = $this->db->get_where('posts',array('category_id'=>$id));
			return $query->result_array();


	}
} ?>
