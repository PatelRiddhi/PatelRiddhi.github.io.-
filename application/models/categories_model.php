<?php
class Categories_Model extends My_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'project_categories';	
	}

	public function get_all()
	{
		return parent::get_all();
	}
	public function get_by_id($id)
	{
		return parent::get_by_id($id);
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
		$this->db->where('project_id',$id);
		return $this->db->get('project_category')->result_array();
		//die;
	}

	public function get_project_id($id)
	{
		$this->db->select('project_id');
		$this->db->where('category_id',$id);
		return $this->db->get('project_category')->result_array();
	}

	public function delete_category($id)
	{
		$this->db->where('project_id', $id);
		return $this->db->delete('project_category');
	}

	public function update($id, $data)
	{
		return parent::update($id, $data);
	}

	public function add($data)
	{
		return parent::add($data);
	}

	public function get_all_projects_page($num = 20, $start=0)
    {
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->limit($num, $start);
        $query = $this->db->get();
        if($query->num_rows() == 0)
        {
            return FALSE;
        }
        else
        {
            return $query->result_array();
        }

    }

    // public function create_links()
    // {
    //    $query = $this->db->get($this->table_name);
    //    return $query->num_rows();
    // }
    
    public function record_count() {
        
    }
}