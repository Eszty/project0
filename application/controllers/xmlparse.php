<?php 

class Taking extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->xmlparse();
    }
       
}

?>
