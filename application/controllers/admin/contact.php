<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends My_Controller 
{

	/**
	 * costructor for load contact_model, Pagination library and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('contact_model');
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

		$data['contact'] = $this->contact_model->total_row(5, $start);
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$data['categories'] = $this->contact_model->get_all();

		/* For Pagination */
		$config["base_url"] = base_url() . "admin/contact/index";
		$config["total_rows"] = $this->contact_model->total_row_count();
		$config["per_page"] = 2;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
	
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		//$data['contact'] = $this->contact_model->get_all();
		$data['content'] = $this->load->view('admin/contact/index', $data, TRUE);
		
		$this->load->view('admin/default', $data);
	}

	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->contact_model->delete($id);
		redirect('admin/contact/index');
	}

	
}
?>