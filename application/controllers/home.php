<?php 
# Home page displaying the courses that the user takes and links to the other functions
class Home extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->home();
        $this->load->view('views/home.php');
        $this->load->view('views/taking.php', array('posts' => $posts)); 
    }
}

?>
