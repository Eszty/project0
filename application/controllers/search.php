<?php

class Search extends CI_Controller {

    public function index()
    {
        #$this->load->model('Model');
        $this->load->view('views/search.php');

        $data = $this->input->post();
        var_dump($data);
        if ($data) 
        {
            var_dump($data);
            $this->load->model('Model');
            $this->Model->get_courses($data);
            header('Location: /courses');
        }
        else 
        {
            $this->load->view('views/search.php');
        }
    }
}

?>
