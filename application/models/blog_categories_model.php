<?php
class Blog_Categories_Model extends My_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'blog_categories';	
	}

	public function get_all()
	{
		return parent::get_all();
	}

	//public function add($data)
	public function get_id($data)
	{
		 $q = $this->db->select('id')->where('name',$data)->get($this->table_name);
		 foreach ($q->result() as $row)
		{
      		return $row->id;
		}
	}

	public function get_category_id($id)
	{
		$this->db->select('category_id');
		$this->db->where('blog_id',$id);
		return $this->db->get('blog_category')->result_array();
	}

	public function delete_category($id)
	{
		$this->db->where('blog_id', $id);
		return $this->db->delete('blog_category');
	}


}