<?php

class Posts extends CI_Controller {
    public function index() {
        $this->load->model('Post');
        $posts = $this->Post->get_latest();

        $this->load->view('posts/index.php', array('posts' => $posts));
    }
}

?>
