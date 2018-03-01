<?php
class Blogs_Model extends My_Model 
{
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'blogs';	
	}

	public function get_by_id($id)
	{
		return parent::get_by_id($id);
	}

	public function get_all()
	{
		return parent::get_all();
	}

	public function delete($id)
	{
		return parent::delete($id);
	}

	public function update_id($data)
	{
		return $this->db->update_batch('blog_category', $data); 
	}

	public function insert_id($data)
	{
		return $this->db->insert_batch('blog_category', $data); 
	}

	public function total_row_count()
	{
		return parent::total_row_count();
	}
	
}