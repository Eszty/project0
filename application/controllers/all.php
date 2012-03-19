<?php 
# Home page displaying the courses that the user takes and links to the other functions
class All extends CI_Controller 
{
    public function index() 
    {
        $data = $this->input->post();
        
        $this->load->model('Model');
        $posts = $this->Model->home();
        
        $shop = $this->Model->get_shopping();
        $res = $this->Model->get_courses($data);
        
        $this->load->view('views/home.php', array('posts' => $posts));
        $this->load->view('views/shopping.php', array('shop' => $shop));
        $this->load->view('views/search.php');
        
        $this->load->view('views/results.php', array('res' => $res));
        $this->load->view('views/header.php');
        $this->load->view('views/footer.php');

        
    }

}

?>
