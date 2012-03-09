<?php 

class Shopping extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_shopping();
        #var_dump($posts);
        $this->load->view('views/shopping.php', array('posts' => $posts));
    }
}

?>
