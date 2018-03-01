<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends My_Controller 
{

/**
 * [__construct description]
 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('projects_model');
		$this->load->model('categories_model');
		$this->load->model('setting_model');
		$this->load->model('images_model');

	}

/**
 * [index description]
 * @return [type] [description]
 */
	public function index()
	{
		$data['projects'] = $this->projects_model->get_all();
		$data['categories'] = $this->categories_model->get_all();
		$data['content'] = $this->load->view('projects/index', $data, TRUE);
		$this->load->view('layout/default', $data);
	}

	public function get_project_by_id($id)
	{
		$data['project'] = $this->projects_model->get_by_id($id);
		$data['images'] = $this->images_model->get_images_by_id($id);
		$data['categories'] = $this->categories_model->get_all();
		
		$data['content'] = $this->load->view('projects/single', $data, TRUE);

		$this->load->view('layout/default', $data);
	}

	public function get_project_by_category($id)
	{

		$projects_id = $this->categories_model->get_project_id($id);
		$count = count($projects_id);
		$projects = array();

		for($i=0; $i<$count;$i++)
		{
			$project_data = $this->projects_model->get_by_id($projects_id[$i]['project_id']);
			array_push($projects, $project_data);	
		}
		$data['projects'] = $projects;
		$data['categories'] = $this->categories_model->get_all();
		$data['content'] = $this->load->view('projects/index', $data, TRUE);
		$this->load->view('layout/default', $data);
	}
}
