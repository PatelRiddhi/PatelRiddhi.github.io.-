<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmonials extends My_Controller 
{
	/**
	 * costructor for load testmonial_model, pagination and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('testmonial_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
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
		$data['testmonial'] = $this->testmonial_model->total_row(5, $start);
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$data['categories'] = $this->testmonial_model->get_all();

		/* For Pagination */
		$config["base_url"] = base_url() . "admin/testmonial/index";
		$config["total_rows"] = $this->testmonial_model->total_row_count();
		$config["per_page"] = 2;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
	
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		//$data['testmonial'] = $this->testmonial_model->get_all();
		$data['content'] = $this->load->view('admin/testmonial/index', $data, TRUE);	
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->testmonial_model->delete($id);
		redirect('admin/testmonials/index');
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
			if(empty($_FILES['image']['name']))
			{
				$path = $this->input->post('old_image');
			}
			else
			{
				$config['upload_path'] = './uploads/testimonial/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('image'))
				{
					$file_path = array('upload_data'=>$this->upload->data());
					$path = 'uploads/testimonial/'.$file_path['upload_data']['file_name'];
				}
				else
				{
				   echo "file upload failed";
				   $data['content'] = $this->load->view('admin/testmonial/add', '', TRUE);	
					$this->load->view('admin/default', $data);
				}
			}
			$data = array(
								'image' =>$path,
								'client_name' =>$this->input->post('client_name') ,
								'designation' =>$this->input->post('designation'),
								'description' =>$this->input->post('description')
								 );
			$this->testmonial_model->update($id, $data);
			redirect('admin/testmonials/index');
		}
		else
		{
			$data['testmonial'] = $this->testmonial_model->get_by_id($id);
			$data['content'] =$this->load->view('admin/testmonial/edit', $data, TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/testmonial/index');
	}

	/**
	 * This function is for add some data in databse or table
	 */
	public function add()
	{
		if($this->input->post())
		{
			$config['upload_path'] = './uploads/';
			$config['upload_url'] = base_url().'upload';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1024';
			$config['max_height'] = '1024';
			$this->load->library('upload', $config);

			if($this->upload->do_upload('image'))
			{
				$file_path = array('upload_data'=>$this->upload->data());
				$path = 'uploads/'.$file_path['upload_data']['file_name'];
			}
			else
			{
			   echo "file upload failed";
			   $data['content'] = $this->load->view('admin/testmonial/add', '', TRUE);	
				$this->load->view('admin/default', $data);
			}

			$data = array(
								'image'=>$path,
								'client_name' =>$this->input->post('client_name') ,
								'designation' =>$this->input->post('designation') ,
								'description' =>$this->input->post('description') 
								 );
			$this->testmonial_model->add($data);
			redirect('admin/testmonials/index');
		}
		else
		{
			$data['content'] = $this->load->view('admin/testmonial/add', '', TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

}
?>