<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends My_Controller 
{
	/**
	 * costructor for load projects_model, categories_model, images_model, Pagination library and start session
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('projects_model');
		$this->load->model('categories_model');
		$this->load->model('images_model');
		$this->load->library('pagination');
		if(!$this->session->userdata('email'))
		{
			redirect('admin');
		}
		//$this->upload_path = './uploads/prjects/';	
		$this->load->helper(array('form', 'url'));
	}

	/**
	 * This function is for redirect the index page of this controller with some pagination
	 * @param  integer $start this parameter is for pagination start index which we selected
	 * @return [boolean]         
	 */
	public function index($start = 0)
	{	
		
			$data['projects'] = $this->projects_model->total_row(5, $start);
			$config['cur_tag_open'] = '&nbsp;<a class="current">';
			$config['cur_tag_close'] = '</a>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';
			$data['categories'] = $this->categories_model->get_all();

			/* For Pagination */
			$config["base_url"] = base_url() . "admin/projects/index";
			$config["total_rows"] = $this->projects_model->total_row_count();
			$config["per_page"] = 5;
			$config['cur_tag_open'] = '&nbsp;<a class="current">';
			$config['cur_tag_close'] = '</a>';
		
			$this->pagination->initialize($config);
			$data['links'] = $this->pagination->create_links();
			$data['content'] = $this->load->view('admin/projects/index', $data, TRUE);
			$this->load->view('admin/default', $data);
		
	}
	
	/**
	 * This function delete data which we want to select by id
	 * @param  [integer] $id select id for delete data from the table
	 * @return [boolean]    
	 */
	public function delete($id)
	{
		$this->categories_model->delete_category($id);
		$this->images_model->delete_images($id);
		$this->projects_model->delete($id);
		redirect('admin/projects/index');
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
			if(empty($_FILES['profile']['name']))
			{
				$path = $this->input->post('old_profile');
			}
			else
			{
				//for upload profile....
				$config['upload_path'] = './uploads/projects/';	
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '1000';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';
				$this->load->library('upload', $config);
			
	   			if($this->upload->do_upload('profile'))
				{
					$file_path = array('upload_data'=>$this->upload->data());
					$path = 'uploads/projects/'.$file_path['upload_data']['file_name'];
				}
				else
				{
				   	echo "file upload failed";
				   	$data['content'] = $this->load->view('admin/projects/add', '', TRUE);	
					$this->load->view('admin/default', $data);
				}
			}
			$project = array(
								'title' => $this->input->post('title') ,
								'description' => $this->input->post('description') ,
								'thumbnail' => $path ,
								'client_name' => $this->input->post('client_name') ,
								'url' => $this->input->post('url') ,
								'features' => $this->input->post('features') 
								);

			//for insert multiple category...
			$this->projects_model->update($id, $project);
			$count=count($_POST['category']);

			$category = array();
			for($i=0; $i<=$count;$i++)
			{
				$category_id = $this->categories_model->get_id($_POST['category'][$i]);
				array_push($category, array('project_id'=>$id, 'category_id'=>$category_id));
			}
			$this->projects_model->update_id($category);

			//for inserting multiple images for project
			if($id)
			{
				$images = array();
				$number_of_files_uploaded = count($_FILES['images']['name']);
    			for ($i = 0; $i < $number_of_files_uploaded; $i++) 
    			{
      				$_FILES['image']['name']     = $_FILES['images']['name'][$i];
      				$_FILES['image']['type']     = $_FILES['images']['type'][$i];
      				$_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
      				$_FILES['image']['error']    = $_FILES['images']['error'][$i];
      				$_FILES['image']['size']     = $_FILES['images']['size'][$i];
     				
					if ($this->upload->do_upload('image')) 
					{
						echo "yes";
        				$fileData = $this->upload->data();
        				array_push($images, array('project_id'=>$id, 'image_path'=>'uploads/projects/'.$fileData['file_name']));
        			}
      				else
      				{
      					echo "opps! file has not uploaded....";
 					}
 					//Enf of if loop..
   				}// End of for loop..
   			}// End of if loop..

			redirect(base_url('admin/projects'),'refresh');
		}
		else
		{
			$data['images'] =$this->images_model->get_images_by_id($id);
			$data['project'] = $this->projects_model->get_by_id($id);
			$data['category_id'] = $this->categories_model->get_category_id($id);
			$data['category'] = $this->categories_model->get_by_id($id);
			$data['content'] = $this->load->view('admin/projects/edit', $data, TRUE);
			$this->load->view('admin/default', $data);
		}
	}

	/**
	 * This function is for add some data in databse or table
	 */
	public function add()
	{
		if($this->input->post())
		{
			//for upload profile....
			$config['upload_path'] = './uploads/projects/';	
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1024';
			$config['max_height'] = '1024';
			$this->load->library('upload', $config);
		
   			if($this->upload->do_upload('profile'))
			{
				$file_path = array('upload_data'=>$this->upload->data());
				$path = 'uploads/projects/'.$file_path['upload_data']['file_name'];
			}
			else
			{
			   	echo "file upload failed";
			   	$data['content'] = $this->load->view('admin/projects/add', '', TRUE);	
				$this->load->view('admin/default', $data);
			}

			$project = array(
								'title' => $this->input->post('title') ,
								'description' => $this->input->post('description') ,
								'thumbnail' => $path ,
								'client_name' => $this->input->post('client_name') ,
								'url' => $this->input->post('url') ,
								'features' => $this->input->post('features') 
								);

			//for insert multiple category...
			$project_id = $this->projects_model->add($project);
			$count=count($_POST['category']);
			$category = array();
			for($i=0; $i<$count;$i++)
			{
				$category_id = $this->categories_model->get_id($_POST['category'][$i]);
				array_push($category, array('project_id'=>$project_id, 'category_id'=>$category_id));
			}
			$this->projects_model->insert_id($category);

			//for inserting multiple images for project
			if($project_id)
			{
				$images = array();
				$number_of_files_uploaded = count($_FILES['images']['name']);
    			for ($i = 0; $i < $number_of_files_uploaded; $i++) 
    			{
      				$_FILES['image']['name']     = $_FILES['images']['name'][$i];
      				$_FILES['image']['type']     = $_FILES['images']['type'][$i];
      				$_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
      				$_FILES['image']['error']    = $_FILES['images']['error'][$i];
      				$_FILES['image']['size']     = $_FILES['images']['size'][$i];
     				
					if ($this->upload->do_upload('image')) 
					{
        				$fileData = $this->upload->data();
        				array_push($images, array('project_id'=>$project_id, 'image_path'=>'uploads/projects/'.$fileData['file_name']));
            		}
      				else
      				{
      					echo "opps! file has not uploaded....";
 					}
 					//Enf of if loop..
   				}// End of for loop..
   			}// End of if loop..
   			$this->images_model->add($images);
			redirect(base_url('admin/projects'),'refresh');
		}
		else
		{
			$data['content'] = $this->load->view('admin/projects/add', '', TRUE);
			$this->load->view('admin/default', $data);
		}
	}

	/**
	 * This function is simply we can redirect index page for this controller to avoid any add or update prodess
	 * @return [boolean] 
	 */
	public function cancel()
	{
		redirect('admin/projects','refresh');
	}

	/**
	 * This function is for to see more information about perticular data which we want
	 * @param  [type] $id This parameter is for id for perticular data which we want to see
	 * @return [boolean] 
	 */
	public function more($id)
	{
		$data['images'] =$this->images_model->get_images_by_id($id);
		$data['project'] = $this->projects_model->get_by_id($id);
		$data['category_id'] = $this->categories_model->get_category_id($id);
		$data['categories'] = $this->categories_model->get_all();
		
		$data['content'] = $this->load->view('admin/projects/more', $data, TRUE);
		$this->load->view('admin/default', $data);	
	}

}
?>