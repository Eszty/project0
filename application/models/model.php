<?php
# Model for project0

class Model extends CI_Model {

    # Function to get the content of the table 'courses'
	public function get_courses() 
	{
    	return $this->db->order_by('title', 'asc')->get('courses')->result();
	}
	
	public function get_users()
	{
	    return $this->db->get('users')->result();
    }
    
    public function get_taking()
    {
        $user_id = 3;
        $c_id= $this->db->get_where('taking', array('user_id'=>$user_id))->result();
        var_dump($c_id);
        foreach ($c_id as $cor_id)
        {
           return $this->db->get_where('courses', array('course_id'=>$cor_id))->result();
        }
    }
    
    public function get_shopping()
    {
        return $this->db->get('shopping')->result();
    }
    
    public function get_faculty()
    {
        $dep = "MUSC";
        return $this->db->get_where('courses', array('dep_code'=>$dep))->result();
	}
	
}

?>
