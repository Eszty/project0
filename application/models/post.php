<?php

class Post extends CI_Model 
{
    public function get_latest() {
        return $this->db->limit(10)->order_by('timestamp', 'desc')->get('posts')->result();
    }
}

?>
