<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $mhs =  $this->home_model->get_mahasiswa();
        $data = ["mahasiswa" => $mhs];
        $this->load->view('home', $data);
    }
}
