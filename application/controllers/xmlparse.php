<?php 

class Xmlparse extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $this->Model->xmlparse();
        $this->load->view('views/xmlparse.php');
    }
       
}

?>
