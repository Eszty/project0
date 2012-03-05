<?php
# Model for project0

class Model extends CI_Model {

    # Function to get the content of the table 'courses'
	public function get_courses() 
	{
    	return $this->db->order_by('title', 'desc')->get('courses')->result();
	}
	
	public function get_users()
	{
	    return $this->db->get('users')->result();
    }
    
    public function get_taking()
    {
        return $this->db->get('taking')->result();
    }
    
    public function get_shopping()
    {
        return $this->db->get('shopping')->result();
    }
    
    public function get_faculty()
    {
        return $this->db->get('faculty')->result();
	}
	
}

?>
