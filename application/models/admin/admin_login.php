<?php
class Admin_Login extends CI_Model 
{
	public function check_data($data)
	{
		$this->db->where($data);
		$result = $this->db->get('admin')->result_array();
		return $result;
	}

}