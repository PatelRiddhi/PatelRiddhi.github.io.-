<?php
class My_Model extends CI_Model 
{

	protected $table_name='';

	/**
	 * get all data by id
	 * @param  [integer] $id 
	 * @return [array]     return array of selected recored by id
	 */
	public function get_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table_name)->row_array();	
	}

	/**
	 * delete data by id
	 * @param  [integer] $id 
	 * @return [array]     boolean 
	 */
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->table_name);
	}

	/**
	 * get all the data of table
	 * @return [array] return array of all records of table
	 */
	public function get_all()
	{
		$query = $this->db->get($this->table_name)->result_array();
		return $query;
	}

	/**
	 * update table data by id
	 * @param  [array] $data 
	 * @param  [integer] $id   [description]
	 * @return [array]       [description]
	 */
	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table_name, $data); 
	}

	public function add($data)
	{
		$this->db->insert($this->table_name, $data);
		return $this->db->insert_id(); 
	}

	public function add_img($data)
	{
		return $this->db->insert_batch($this->table_name, $data);
	}

	public function total_row_count()
	{
		return $this->db->count_all($this->table_name);
	}

	public function total_row($num, $start)
	{
		$this->db->select()->from($this->table_name)->limit($num,$start);
		return $this->db->get()->result_array();
	}

	public function get_filters($id)
	{
		$query = $this->db->query('SELECT * FROM projects INNER JOIN project_category ON project_category.project_id = projects.id WHERE project_category.category_id = '.$id);
		return $query->result_array();
	}
}
?>