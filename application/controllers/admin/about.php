<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller 
{
	/**
	 * constructore which load about_model and form helper and set session data
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('about_model');
		// $this->load->library('ckeditor');
		// $this->load->library('ckfinder');
		$this->load->helper(array('form', 'url'));
		if(!$this->session->userdata('email'))
		{
			redirect('admin');
		}
		
	}
	/**
	 * This function redirect index page of about 
	 * In this we can only update about data +
	 * 
	 * @return boolean 
	 */
	public function index()
	{
		if($this->input->post())
		{
			if(empty($_FILES['image']['name']))
			{
				$path = $this->input->post('old_image');
			}
			else
			{
				$config['upload_path'] = './uploads/about/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('image'))
				{
					$file_path = array('upload_data'=>$this->upload->data());
					$path = 'uploads/about/'.$file_path['upload_data']['file_name'];
				}
				else
				{
				   echo "file upload failed";
				   redirect('admin/about');
				}
			}
			$about = array(
								'image' => $path ,
								'title' => $this->input->post('title') ,
								'description' => $this->input->post('description') 
								);
			if($this->about_model->update($id= 1, $about))
			{
				$data['content'] = array();
				$this->load->view('admin/default', $data);	
			}	
		}
		else
		{
			// $this->ckeditor->basePath = base_url().'js/ckeditor/';
			// $this->ckeditor->config['toolbar'] = array(
			// 	                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
			// $this->ckeditor->config['id'] = 'description';	                                                    );
			// $this->ckeditor->config['language'] = 'en';
			// $this->ckeditor->config['width'] = '730px';
			// $this->ckeditor->config['height'] = '300px';            

			// 	//Add Ckfinder to Ckeditor
			// $this->ckfinder->SetupCKEditor($this->ckeditor, '../../asset/ckfinder/'); 
			$data['about'] = $this->about_model->get_all();			
			$data['content'] = $this->load->view('admin/about/index', $data ,TRUE);
			$this->load->view('admin/default', $data);
		}
	}
}
?>