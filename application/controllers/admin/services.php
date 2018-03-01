<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends My_Controller 
{
	/**
	 * costructor for load services_model and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('services_model');
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
		$data['services'] = $this->services_model->get_all();
		$data['content'] = $this->load->view('admin/services/index', $data, TRUE);	
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->services_model->delete($id);
		redirect('admin/services/index');
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
			$this->services_model->update($id, $data);
			redirect('admin/services/index');
		}
		else
		{
			$data['services'] = $this->services_model->get_by_id($id);
			$data['content'] =$this->load->view('admin/services/edit', $data, TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/services/index');
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
			$this->services_model->add($data);
			redirect('admin/services/index');
		}
		else
		{
			$data['content'] = $this->load->view('admin/services/add', '', TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

}
?>