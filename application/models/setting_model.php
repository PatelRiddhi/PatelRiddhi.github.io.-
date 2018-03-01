<?php
class Setting_Model extends My_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
		$this->table_name = 'settings';	
	}

	public function get_all()
	{
		return parent::get_all();
	}

	public function update($id, $data)
	{
        return parent::update($id, $data);
	}
}
?>