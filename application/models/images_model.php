<?php
class Images_Model extends My_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'project_images';	
	}

	public function get_by_id($id)
	{
		return parent::get_by_id($id);
	}

	public function add($data)
	{
		return $this->db->insert_batch($this->table_name, $data); 
	}

	public function get_images_by_id($id)
	{
		 return $this->db->get_where($this->table_name, array('project_id' => $id))->result_array();

	}
	public function update_image($data)
	{
		return $this->db->update_batch($this->table_name, $data); 
	}

	public function delete_images($id)
	{
		$this->db->where('project_id', $id);
		return $this->db->delete($this->table_name);
	}


}

