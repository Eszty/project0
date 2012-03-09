<?php
# Home page Model

class Home extends CI_Model {

	public function get_latest() 
	{
    	return $this->db->get('courses')->result();
	}
	
	
}

?>
