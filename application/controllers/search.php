<?php


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


?>
