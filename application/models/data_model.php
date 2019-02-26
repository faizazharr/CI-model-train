<?php

class data_model extends CI_Model
{
    
    public function view()
    {
        return $this->db->get('kelas')->result();
    }

    public function add()
    {
        # code...
    }
}

