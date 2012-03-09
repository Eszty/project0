<?php

<<<<<<< HEAD

class Search extends CI_Controller
 {
    public function index() 
    {
        $data = $this->input->post();
        $this->load->model('Model');
        $posts = $this->Model->get_courses($data); 
        $this->load->view('views/search.php', array('posts' => $posts));
    }
}


=======
class Search extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_courses();

    }
}

>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
?>
