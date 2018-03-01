<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends My_Controller 
{
/**
 * [__construct description]
 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->model('projects_model');
	}

/**
 * [index description]
 * @return [type] [description]
 */
	public function index()
	{
		$data['content'] = $this->load->view('contact/index', '', TRUE);
		$this->load->view('layout/default', $data);
	}

	public function input_data()
	{
		$inquery_data = array(
						'name' => $this->input->post('name'),
						'email' => $this->input->post('mail'),
						'website' => $this->input->post('website'),
						'message' => $this->input->post('comment')
						);
		$this->contact_model->contact_data($inquery_data);
		redirect(base_url());
	}
}
