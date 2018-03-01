<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends My_Controller 
{
	/**
	 * costructor for load skills_model and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('skills_model');
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
		$data['skills'] = $this->skills_model->get_all();
		$data['content'] = $this->load->view('admin/skills/index', $data, TRUE);	
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->skills_model->delete($id);
		redirect('admin/skills/index');
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
								'name' =>$this->input->post('name') ,
								'level' =>$this->input->post('level')
								 );
			$this->skills_model->update($id, $data);
			redirect('admin/skills/index');
		}
		else
		{
			$data['skills'] = $this->skills_model->get_by_id($id);
			$data['content'] =$this->load->view('admin/skills/edit', $data, TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/skills/index');
	}

	/**
	 * This function is for add some data in databse or table
	 */
	public function add()
	{
		if($this->input->post())
		{
			$data = array(
								'name' =>$this->input->post('name') ,
								'level' =>$this->input->post('level') 
								 );
			$this->skills_model->add($data);
			redirect('admin/skills/index');
		}
		else
		{
			$data['content'] = $this->load->view('admin/skills/add', '', TRUE);	
			$this->load->view('admin/default', $data);

		}
	}

}
?>