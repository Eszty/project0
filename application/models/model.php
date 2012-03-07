<?php
# Model for project0

class Model extends CI_Model {

    # Function to get the content of the table 'courses'
	public function get_courses() 
	{
<<<<<<< HEAD
    	return $this->db->order_by('title', 'desc')->get('courses')->result();
=======
    	return $this->db->order_by('title', 'asc')->get('courses')->result();
>>>>>>> 4793a49f79c2f65dc7526ab5b5ace71c2c86d7be
	}
	
	public function get_users()
	{
	    return $this->db->get('users')->result();
    }
    
    public function get_taking()
    {
<<<<<<< HEAD
        return $this->db->get('taking')->result();
=======
        $user_id = 3;
        $c_id= $this->db->get_where('taking', array('user_id'=>$user_id))->result();
        var_dump($c_id);
        foreach ($c_id as $cor_id)
        {
           return $this->db->get_where('courses', array('course_id'=>$cor_id))->result();
        }
>>>>>>> 4793a49f79c2f65dc7526ab5b5ace71c2c86d7be
    }
    
    public function get_shopping()
    {
        return $this->db->get('shopping')->result();
    }
    
    public function get_faculty()
    {
<<<<<<< HEAD
        return $this->db->get('faculty')->result();
=======
        $dep = "MUSC";
        return $this->db->get_where('courses', array('dep_code'=>$dep))->result();
>>>>>>> 4793a49f79c2f65dc7526ab5b5ace71c2c86d7be
	}
	
}

?>
