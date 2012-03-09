<?php 

class Courses extends CI_Controller 
{
    public function index() 
    {
        $data = $this->input->post();
        $this->load->model('Model');
        $posts = $this->Model->get_courses($data);
        #var_dump($posts);
        var_dump('4');
        $this->load->view('views/search.php', array('posts' => $posts));
    }
}

?>
