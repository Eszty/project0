<?php 

class Course_Contr extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_latest();
        #var_dump($posts);
        $this->load->view('home2/index.php', array('posts' => $posts));
    }
}

?>
