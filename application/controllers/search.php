<?php

class Search extends CI_Controller {

    public function index()
    {
        var_dump('6');
        #$data = $this->input->post();
        $this->load->model('Model');
        #$posts = $this->Model->get_courses($data);
        #var_dump($posts);
        var_dump('4');
        $this->load->view('views/search.php', array('posts' => $posts));

    }
    
    public function search()
    {
        #$this->load->view('views/search.php');
        var_dump('2');
        $data = $this->input->post();
        if ($data) 
        {
            var_dump('3');
            #var_dump($data);
            $this->load->model('Model');
            $this->Model->get_courses($data);
            header('Location: /courses');
        }
        else 
        {
            var_dump('7');
            $this->load->view('views/search.php');
        }
    }
}

?>
