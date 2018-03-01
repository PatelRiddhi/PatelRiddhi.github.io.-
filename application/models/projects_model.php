<?php
class Projects_Model extends My_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'projects';	
	}

	public function get_by_id($id)
	{
		return parent::get_by_id($id);
	}

	public function get_all()
	{
		return parent::get_all();
	}

	public function get_selected($id)
	{
		$this->db->where('category_id',$id);
		return $this->db->get($this->table_name)->result_array();
	}

	public function delete($id)
	{
		return parent::delete($id);
	}

	public function total_row($num, $start)
	{
		return parent::total_row($num, $start);
	}

	public function total_row_count()
	{
		return parent::total_row_count();
	}

	public function add($data)
	{
		return parent::add($data);
	}

	public function update($id, $data)
	{
		 return parent::update($id, $data);
	}

	public function insert_id($data)
	{
		return $this->db->insert_batch('project_category', $data); 
	}

	public function update_id($data)
	{
		return $this->db->update_batch('project_category', $data); 
	}

}
?>