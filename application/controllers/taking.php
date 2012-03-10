<?php 

class Taking extends CI_Controller 
{
    public function index() 
    {
        $data = $this->input->post();
        $dataLength = count($data);

        if($dataLength != 1)
        {        
            $this->load->model('Model');
            $posts = $this->Model->take($data);
            $new_posts = $this->Model->get_taking();
            #var_dump($posts);
            $this->load->view('views/taking.php', array('posts' => $new_posts));
        }
        else
        {
            $this->load->model('Model');
            $posts = $this->Model->get_taking();
            $this->load->view('views/taking.php', array('posts' => $posts));
        }
    }
}

?>
