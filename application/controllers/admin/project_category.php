<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Category extends My_Controller 
{
	/**
	 * costructor for load categories_model and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('categories_model');
		if(!$this->session->userdata('email'))
		{
			redirect('admin');
		}
	}

	/**
	 * This function is for redirect the index page of this controller with some pagination
	 * @return [boolean]         
	 */
	public function index()
	{		
		$data['categories'] = $this->categories_model->get_all();
		$data['content'] = $this->load->view('admin/project_category/index', $data, TRUE);	
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->categories_model->delete($id);
		redirect('admin/project_category');
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
			$data = array(
							'name' =>$this->input->post('name') 
							 );
			$this->categories_model->update($id, $data);
			redirect('admin/project_category');
		}
		else
		{
			$data['categories'] = $this->categories_model->get_by_id($id);
			$data['content'] =$this->load->view('admin/project_category/edit', $data, TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/project_category');
	}

	/**
	 * This function is for add some data in databse or table
	 */
	public function add()
	{
		if($this->input->post())
		{
			$data = array(
							'name' =>$this->input->post('name') 
							 );
			$this->categories_model->add($data);
			redirect('admin/project_category');
		}
		else
		{
			$data['content'] = $this->load->view('admin/project_category/add', '', TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

}
?>