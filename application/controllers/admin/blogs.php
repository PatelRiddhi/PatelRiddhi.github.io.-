<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends My_Controller 
{

	/**
	 * costructor for load blogs_model, blog_categories_model, Pagination library and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('blogs_model');
		$this->load->model('blog_categories_model');
		$this->load->library('Pagination');
		if(!$this->session->userdata('email'))
		{
			redirect('admin');
		}
	}

	/**
	 * This function is for redirect the index page of this controller with some pagination
	 * @param  integer $start this parameter is for pagination start index which we selected
	 * @return [boolean]         
	 */
	public function index($start=0)
	{	
		$data['blogs'] = $this->blogs_model->total_row(5, $start);
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$data['categories'] = $this->blog_categories_model->get_all();

		/* For Pagination */
		$config["base_url"] = base_url() . "admin/blogs/index";
		$config["total_rows"] = $this->blogs_model->total_row_count();
		$config["per_page"] = 2;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
	
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		$data['content'] = $this->load->view('admin/blogs/index', $data, TRUE);
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->blog_categories_model->delete_category($id);
		$this->blogs_model->delete($id);
		redirect('admin/blogs');
	}

	/**
	 * This function is for update data which we want to select by id
	 * @param  [integer] $id select id for update data from the table
	 * @return [boolean] 
	 */
	public function edit($id)
	{
		if($this->input->post())
		{

			//for upload profile....	
			if(empty($_FILES['profile']['name']))
			{
				$path = $this->input->post('old_profile');
			}
			else
			{
				$config['upload_path'] = './uploads/blogs/';	
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '1000';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';
				$this->load->library('upload', $config);
			
	   			if($this->upload->do_upload('profile'))
				{
					$file_path = array('upload_data'=>$this->upload->data());
					$path = 'uploads/blogs/'.$file_path['upload_data']['file_name'];
				}
				else
				{
				   	echo "file upload failed";
				}

				$blog = array(
									'title' => $this->input->post('title') ,
									'short_description' => $this->input->post('short_description') ,
									'thumbnail' => $path ,
									'long_description' => $this->input->post('long_description') 
									);

				//for insert multiple category...
				$this->blogs_model->update($id, $blog);
				$count=count($_POST['category']);
				$category = array();
				for($i=0; $i<$count;$i++)
				{
					$category_id = $this->blog_categories_model->get_id($_POST['category'][$i]);;
					array_push($category, array('blog_id'=>$id, 'category_id'=>$category_id));
				}
				if($this->blogs_model->update_id($category))
				{
					redirect('admin/blogs','refresh');
				}
			}
		}
		else
		{
			$data['blog'] = $this->blogs_model->get_by_id($id);
			$data['category_id'] = $this->blog_categories_model->get_category_id($id);
			$data['category'] = $this->blog_categories_model->get_by_id($id);
			$data['content'] = $this->load->view('admin/blogs/edit', $data, TRUE);
			$this->load->view('admin/default', $data);
		}
	}

	/**
	 * This function is for add some data in databse or table
	 */
	public function add()
	{
		if($this->input->post())
		{
			//for upload profile....
			$config['upload_path'] = './uploads/blogs/';	
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1024';
			$config['max_height'] = '1024';
			$this->load->library('upload', $config);
		
   			if($this->upload->do_upload('profile'))
			{
				$file_path = array('upload_data'=>$this->upload->data());
				$path = 'uploads/blogs/'.$file_path['upload_data']['file_name'];
			}
			else
			{
			   	echo "file upload failed";
			}

			$blog = array(
								'title' => $this->input->post('title') ,
								'short_description' => $this->input->post('short_description') ,
								'thumbnail' => $path ,
								'long_description' => $this->input->post('long_description') 
								);

			//for insert multiple category...
			$blog_id = $this->blogs_model->add($blog);
			$count=count($_POST['category']);
			$category = array();
			for($i=0; $i<$count;$i++)
			{
				$category_id = $this->blog_categories_model->get_id($_POST['category'][$i]);
				array_push($category, array('blog_id'=>$blog_id, 'category_id'=>$category_id));
			}
			$this->blogs_model->insert_id($category);
			redirect(base_url('admin/blogs'),'refresh');
		}
		else
		{
			$data['content'] = $this->load->view('admin/blogs/add', '', TRUE);
			$this->load->view('admin/default', $data);
		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/blogs','refresh');
	}

	/**
	 * This function is for to see more information about perticular data which we want
	 * @param  [type] $id This parameter is for id for perticular data which we want to see
	 * @return [boolean] 
	 */
	public function more($id)
	{
		$data['blog'] = $this->blogs_model->get_by_id($id);
		$data['category_id'] = $this->blog_categories_model->get_category_id($id);
		$data['categories'] = $this->blog_categories_model->get_all();
		$data['content'] = $this->load->view('admin/blogs/more', $data, TRUE);
		$this->load->view('admin/default', $data);	
	}

}
?>