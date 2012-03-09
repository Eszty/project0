<?php
# Model for project0

class Model extends CI_Model {

   
        # Inputs:
            # catalog_nr
            # title
            # description
            # instructor_name
            # day
            # begin_time
        # ==> get from courses where ...


    # Function to get the content of the table 'courses'
	public function get_courses($data) 
	{
	    var_dump('1');
	    var_dump($data);
    	return $this->db->order_by('title', 'asc')->get('courses')->result();
	}
	
	# Get the users
	public function get_users()
	{
	    return $this->db->get('users')->result();
    }
    
    # Get the courses that the user is taking
    public function get_taking()
    {
        $user_id = 2;
        $this->db->select('course_id');
        $c_id= $this->db->get_where('taking', array('user_id'=>$user_id))->result();
                
        $array=array();
        foreach ($c_id as $cor_id)
        {          
           $a= $this->db->get_where('courses', array('id'=>($cor_id->course_id)))->result();
           array_push($array,$a);
        }
        
        return $array;
    }
    
    public function get_by_catnum()
    {
        $cat_num = 9428
        $this->db->select('cat_num');
        $c_num= $this->db->get_where('courses', array('cat_num'=>$cat_num))->result();
        $array=array();
        foreach ($c_num as $cor_num)
        {          
           $a= $this->db->get_where('courses', array('id'=>($cor_num->cat_num)))->result();
           array_push($array,$a);
        }
    }
    
    # Get the courses that the user is shopping
    public function get_shopping()
    {
        $user_id = 1;
        $this->db->select('course_id');
        $c_id= $this->db->get_where('shopping', array('user_id'=>$user_id))->result();
                
        $shop_array=array();
        foreach ($c_id as $cor_id)
        {          
           $a= $this->db->get_where('courses', array('id'=>($cor_id->course_id)))->result();
           array_push($shop_array,$a);
        }
        
        return $shop_array;
    }
    
    # Get the courses from a specific department
    public function get_faculty()
    {
        $dep = "MUSC";
        return $this->db->get_where('courses', array('dep_code'=>$dep))->result();
	}
	
}

?>
