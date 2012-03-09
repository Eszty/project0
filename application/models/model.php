<?php
# Model for project0

class Model extends CI_Model {


    # Function to get the content of the table 'courses'
    # TODO: Remove duplicates
	public function get_courses($data) 
	{
	    $cat = $data["catalog_number"];
	    $title = $data["title"];
	    $inst = $data["instructor"];
	    $day = $data["day"];
	    $time = $data["time"];

        $results = array();
        if($cat != '')
        {
            $c = $this->db->get_where('courses', array('cat_num'=>$cat))->result(); 
            array_push($results,$c);
        }
        if($title != '')
        {
        	$tit = $this->db->get_where('courses', array('title'=>$title))->result();
        	array_push($results,$tit);
    	}
    	if($inst != '')
    	{
        	$i = $this->db->get_where('courses', array('instructor'=>$instructor))->result();
        	array_push($results,$i);
        }
        if($day != '')
        {
        	$d = $this->db->get_where('courses', array('day'=>$day))->result();
        	array_push($results,$d);
    	}
    	if($time != '')
    	{
        	$t = $this->db->get_where('courses', array('begin_time'=>$time))->result();
        	array_push($results,$t);
    	}
    	
    	return $results;
	}

	
	# Get the users
	public function get_users()
	{
	    return $this->db->get('users')->result();
    }
    
    # Get the courses that the user is taking
    # TODO: Must be able to ADD courses tot 'taking'
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
    
    
    # Get the courses that the user is shopping
    # TODO: Must be able to ADD to 'shopping'
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
