<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Admin_Login','al');
	}

	public function index()
	{		
		$this->load->view('admin/login');
	}

	public function login_check()
	{		
		$data = array(
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password')
					);
		if($this->al->check_data($data))
		{
			$data['content'] = array();
			$this->session->set_userdata('email', $data['email']);
			$this->load->view('admin/default', $data);
		}
		else
		{
			$this->load->view('admin/dashboard');
		}
	}

	public function dash()
	{
		$data['content'] = array();
		$this->load->view('admin/default', $data);
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}


