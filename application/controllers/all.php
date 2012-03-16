<?php 
# Home page displaying the courses that the user takes and links to the other functions
class All extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('Model');
        $posts = $this->Model->home();
        $shop = $this->Model->get_shopping();
        $this->load->view('views/home.php', array('posts' => $posts));
        $this->load->view('views/shopping.php', array('shop' => $shop));
        $this->load->view('views/header.php');
        $this->load->view('views/footer.php');

        
    }

}

?>
