<?php

class Search extends CI_Controller {
    
    public function index() 
    {
        $data = $this->input->post();
        if ($data) 
        {
            var_dump($data);
            $this->load->model('Model');
            $this->Model->get_courses();
            header('Location: /courses');
        }
        else 
        {
            $this->load->view('views/search.php');
        }
    }
}

?>
