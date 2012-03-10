<?php 

class Shopping extends CI_Controller 
{
    public function index() 
    {
        #$data = (isset($_POST['shop']))?true:false;
        $data = $this->input->post();
        $dataLength = count($data);

        if($dataLength != 1)
        {        
            $this->load->model('Model');
            $posts = $this->Model->add_shop($data);
            $new_posts = $this->Model->get_shopping();
            #var_dump($posts);
            $this->load->view('views/shopping.php', array('posts' => $new_posts));
        }
        else
        {
            # TODO: where to link when no actions taken?
            var_dump("TODO");
        }
    }
}

?>
