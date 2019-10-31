<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $mhs =  $this->home_model->get_mahasiswa();
        $jurusan = $this->home_model->get_jurusan();
        $data = [
            "mahasiswa" => $mhs,
            "jurusan" => $jurusan
        ];
        $this->load->view('home', $data);
    }

    public function add()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'id_jurusan' => $this->input->post('jurusan'),
        ];
        $this->home_model->add_mahasiswa($data);
        redirect('home');
    }
}
