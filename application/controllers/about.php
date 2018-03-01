<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller 
{
/**
 * [__construct description]
 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('about_model');
		$this->load->model('team_model');
		$this->load->model('skills_model');
		$this->load->model('testmonial_model');
		$this->load->model('services_model');
	}

/**
 * [index description]
 * @return [type] [description]
 */
	public function index()
	{	
		$data['about'] = $this->about_model->get_all();
		$data['team'] = $this->team_model->get_all();
		$data['skills'] = $this->skills_model->get_all();
		$data['testimonials'] = $this->testmonial_model->get_all();
		$data['services'] = $this->services_model->get_all();
		$data['content'] = $this->load->view('about/index', $data, TRUE);
		$this->load->view('layout/default', $data);
	}


}
