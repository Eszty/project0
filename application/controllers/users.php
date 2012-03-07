<?php 

class Users extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_users();
        #var_dump($posts);
        $this->load->view('views/users.php', array('posts' => $posts));
    }
}

?>
