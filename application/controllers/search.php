<?php

class Search extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_courses();

    }
}

?>
