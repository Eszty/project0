<?php 

class Courses extends CI_Controller 
{
    public function index() 
    {
        $data = $this->input->post();
        $this->load->model('Model');
        $posts = $this->Model->get_courses($data);
        #var_dump($posts);
        var_dump('4');
<<<<<<< HEAD
        $this->load->view('views/courses.php', array('posts' => $posts));
=======
        $this->load->view('views/search.php', array('posts' => $posts));
>>>>>>> 34d3d6eeee261a0c91b222b799cd6d4a6ec3e953
    }
}

?>
