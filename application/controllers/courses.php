<?php 

class Courses extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_courses();
        #var_dump($posts);
        $this->load->view('views/courses.php', array('posts' => $posts));
    }
}

?>
