<?php

class Home_model extends CI_Model
{

    public function get_mahasiswa()
    {
        $query = $this->db->get('tbl_mahasiswa');
        return $query->result();
    }

    public function get_jurusan(){
        $query = $this->db->get('tbl_jurusan');
        return $query->result();        
    }

    public function add_mahasiswa($data){
        $query = $this->db->insert("tbl_mahasiswa",$data);
    }
}
