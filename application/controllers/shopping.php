<?php 

class Shopping extends CI_Controller 
{
    public function index() 
    {
        $data = $this->input->post();
        var_dump($data);
        
        $this->load->model('Model');
        $posts = $this->Model->get_shopping();
        #var_dump($posts);
        $this->load->view('views/shopping.php', array('posts' => $posts));
    }
}

?>
