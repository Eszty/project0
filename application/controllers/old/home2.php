<?php 

class Course_Contr extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
<<<<<<< HEAD:application/controllers/home2.php
        $posts = $this->Home->get_latest();
=======
        $posts = $this->Model->get_latest();
>>>>>>> d1380ea972fead0a064f28585ec3b0e358e4bfdd:application/controllers/old/home2.php
        #var_dump($posts);
        $this->load->view('home2/index.php', array('posts' => $posts));
    }
}

?>
