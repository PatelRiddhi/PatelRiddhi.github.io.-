<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends My_Controller 
{
/**
 * [__construct description]
 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('works_model');
		$this->load->model('projects_model');
	}

/**
 * [index description]
 * @return [type] [description]
 */
	public function index()
	{
		$data['projects'] = $this->projects_model->get_all();
		$data['content'] = $this->load->view('projects/index', $data, TRUE);
		$data['categories'] = $this->works_model->get_all();
		$this->load->view('layout/default', $data);
	}
}
