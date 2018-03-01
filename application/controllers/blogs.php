<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends My_Controller 
{

/**
 * [__construct description]
 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('blogs_model');
		$this->load->model('blog_categories_model');
	}

/**
 * [index description]
 * @return [type] [description]
 */
	public function index()
	{		
		$data['blogs'] = $this->blogs_model->get_all();
		$data['content'] = $this->load->view('blogs/index', $data, TRUE);
		$this->load->view('layout/default', $data);
	}

	public function get_blog_by_id($id)
	{
		$data['blog'] = $this->blogs_model->get_by_id($id);
		$data['categories'] = $this->blog_categories_model->get_all();
		$data['content'] = $this->load->view('blogs/single', $data, TRUE);
		$this->load->view('layout/default', $data);
	}

}
