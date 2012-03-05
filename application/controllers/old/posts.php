<?php

class Posts extends CI_Controller {
    public function index() {
        $this->load->model('Post');
        $posts = $this->Post->get_latest();

        $this->load->view('posts/index.php', array('posts' => $posts));
    }
    
    public function add() {
        $data = $this->input->post();

        if ($data) {
            $this->load->model('Post');
            $this->Post->add($data);
            header('Location: /posts');
        }
        else {
            $this->load->view('posts/add.php');
        }
    }
}

?>
