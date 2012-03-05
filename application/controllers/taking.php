<?php 

class Taking extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_taking();
        #var_dump($posts);
        $this->load->view('views/taking.php', array('posts' => $posts));
    }
}

?>
