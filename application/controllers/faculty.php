<?php 

class Faculty extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->get_faculty();
        #var_dump($posts);
        $this->load->view('views/faculty.php', array('posts' => $posts));
        #$this->Model->xmlparse();
    }
}

?>
