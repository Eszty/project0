<?php

class Post extends CI_Model 
{
    public function get_latest() {
        return $this->db->limit(10)->order_by('timestamp', 'desc')->get('posts')->result();
    }
    
    public function add($data) {
        if ($this->db->insert('posts', $data))
            return $this->db->insert_id();
        else
            return false;
    }
}

?>
