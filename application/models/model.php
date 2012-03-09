<?php
# Model for project0

class Model extends CI_Model {

<<<<<<< HEAD
    
=======
>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
   
        # Inputs:
            # catalog_nr
            # title
<<<<<<< HEAD
=======
            # description
>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
            # instructor_name
            # day
            # begin_time
        # ==> get from courses where ...


    # Function to get the content of the table 'courses'
	public function get_courses($data) 
	{
<<<<<<< HEAD
        foreach($data as $input)
        {
    	    return $this->db->get_where('courses', array('cat_num'=>$input))->result();
    	}
	}
	
	public function get_by_catnum($data)
    {
        $cat_num = 9428;
        $this->db->select('cat_num');
        $c_num= $this->db->get_where('courses', array('cat_num'=>$cat_num))->result();
 
    }
	
=======
	    var_dump('1');
	    var_dump($data);
    	return $this->db->order_by('title', 'asc')->get('courses')->result();
	}
	
>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
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
    
<<<<<<< HEAD
=======
    public function get_by_catnum()
    {
        $cat_num = 9428
        $this->db->select('cat_num');
        $c_num= $this->db->get_where('courses', array('cat_num'=>$cat_num))->result();
 
    }
>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
    
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
