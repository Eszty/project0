<?php

 # Inputs:
            # catalog_nr
            # title
            # instructor_name
            # day
            # begin_time
        # ==> get from courses where ...


class Search extends CI_Controller
 {
    
    public function index() 
    {
        $data = $this->input->post();
        
        if($data)
        {
            $this->load->model('Model');
            $posts = $this->Model->get_courses($data); 
            $this->load->view('views/courses.php', array('posts' => $posts));
        }
        else
        {
            #$this->load->model('Model');
            #$posts = $this->Model->get_taking();
            $this->load->view('views/search.php');
        }
    }
    
    public function add_shop()
    {
        # TODO: add courses to shopping car
    }
    
    public function take()
    {
        # TODO: add courses to taking table
    }
}




?>
