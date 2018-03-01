<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends My_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('setting_model');
		if(!$this->session->userdata('email'))
		{
			redirect('admin');
		}
	}

	public function index()
	{
		if($this->input->post())
		{
			$settings = array(
								'contact_no' => $this->input->post('contact_no') ,
								'email' => $this->input->post('email') ,
								'address' => $this->input->post('address') ,
								'facebook_url' => $this->input->post('facebook_url') ,
								'instagram_url' => $this->input->post('instagram_url') ,
								'twitter_url' => $this->input->post('twitter_url') ,
								'google_plus_url' => $this->input->post('google_plus_url') ,
								'pinterest_url' => $this->input->post('pinterest_url') ,
								'linked_in_url' => $this->input->post('linked_in_url') ,
								'youtbe_url' => $this->input->post('you_tube_url')  
								);
			if($this->setting_model->update($id= 0, $settings))
			{
				$data['content'] = array();
				$this->load->view('admin/default', $data);	
			}
			
		}
		else
		{
			$data['settings'] = $this->setting_model->get_all();			
			$data['content'] = $this->load->view('admin/settings/index', $data ,TRUE);
			$this->load->view('admin/default', $data);
		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/dashboard/dash', 'refresh');
	}
}
?>