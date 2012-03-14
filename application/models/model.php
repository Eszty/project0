<?php
# Model for project0

# TODO: which user? (for now: user 1 is used everywhere)

class Model extends CI_Model {


    public function home()
    {
        $user_id = 1;
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
    public function get_taking()
    {
        $user_id = 1;
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
    
    
    # Get the courses that the user is shopping (list of course names)
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
	
	# Add courses to the shopping list of the user
	public function add_shop($data)
    { 
        $user_id = '1';
        $course_id_a = $data["shop"];
        foreach($course_id_a as $course_id)
        {
            $insertion = array(array('course_id'=>$course_id, 'user_id'=>$user_id));
            $this->db->insert_batch('shopping', $insertion);
        }  
    }
    
    # Add courses from 'shopping' to 'taking'
    # Delete added courses from shopping
    public function take($data)
    {
        $user_id = '1';
        $course_id_a = $data["shop"];
        foreach($course_id_a as $course_id)
        {
            $insertion = array(array('course_id'=>$course_id, 'user_id'=>$user_id));
            $this->db->insert_batch('taking', $insertion);
            $where = array('course_id'=>$course_id, 'user_id'=>$user_id);
            $this->db->delete('shopping', $where);
        } 
    }
    
    # XML parser
    public function xmlparse()
    {
       # TODO: add courses + details to DB
       #$xmlstr = "http://cdn.cs164.net/2012/spring/projects/0/courses.xml";
       include '../courses.php';
       $xml = new SimpleXMLElement($xmlstr); 
       foreach ($xml->course as $course) 
       {
            # Course title
            # only title
            $title = $course->title;
            
            # Department number
            # only the code
            foreach($xml->course->department as $dep)
            {
                $dep_code = $dep['code'];
            }
            
            # Course number
            # only the number
            foreach($xml->course->cat_num as $c_n)
            {
                $cat_num = $c_n['cat_num'];
            }
            
            # Course description
            # only the description
            $description = $course->description;
            
            # Course instructor
            # array of arrays => [[first, last], [unknown],...]
            $instructor = array();
            $all = array();
            $unknown = array();
            if($course->faculty_list->faculty)
            {
                $last = $course->faculty_list->faculty->name->last;
                $first = $course->faculty_list->faculty->name->first;
                array_push($instructor, $first);
                array_push($instructor, $last);
                array_push($all, $instructor);
            }
            else 
            {
                array_push($unknown, 'Unknown');
                array_push($all, $unknown);
            }
            /*foreach($all as $ins)
            {
                foreach($ins as $instruc)
                {
                    echo $instruc, '</br>';
                }
            }*/
            
            # Course location (building) 
            # array of arrays => [[building,room],[unknown]...]
            $location = array();
            $all = array();
            $unknow = array();
            if($course->meeting_locations->location)
            {
                $building = $course->meeting_locations->location['building'];
                $room = $course->meeting_locations->location['room'];
                array_push($location, $building);
                array_push($location, $room);
                array_push($all, $location);
            }
            else
            {
                $un = 'Unknown';
                array_push($unknown, $un);
                array_push($all, $unknown);
            }
            
            /*foreach($all as $loc)
            {
                foreach($loc as $loc_all)
                {
                    echo $loc_all, '</br>';
                }
            }*/
            
            
            # Course day and begin time
            # array of arrays => [[day_number, begin_time], [unknown]...]
            $known = array();
            $all = array();
            $unknown = array();
            if($course->schedule->meeting)
            {
                $day = $course->schedule->meeting['day'];
                $begin_time = $course->schedule->meeting['begin_time'];
                array_push($known, $day);
                array_push($known, $begin_time);
                array_push($all, $known);
            }
            else
            {
                $day_u = 'Unknown';
                array_push($unknown, $day_u);
                array_push($all, $unknown);
            }
            foreach($all as $days)
            {
                foreach($days as $day_all)
                {
                    echo $day_all, '</br>';
                }
            }
  
       }
       /* TODO: forloop through all the arrays
       Maybe one big array with all the arrays and everything else
       Probably multiple if-statements
       Everytime a row (course with details) is added, also add an id (auto increment) with $this->db->insert_id();*/
       return true;
    }
	
}

?>
