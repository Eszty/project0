<?php 

class Home2 extends CI_Controller {
    public function index() 
    {
        $this->load->model('Home');
        $posts = $this->Home->get_latest();

        var_dump($posts);
        exit;
    }
}

?>
