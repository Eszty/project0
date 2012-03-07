<?php

class Search extends CI_Controller {
    public function index() 
    {
        $data = $this->input->post();
        

        if ($data) 
        {
            $this->load->model('Model');
            $this->Model->search($data);
            var_dump($data);
            header('Location: /search');
        }
        else 
        {
            $this->load->view('views/search.php');
        }
    }
}

?>
