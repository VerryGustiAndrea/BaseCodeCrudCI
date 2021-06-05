<?php

class Mahasiswa extends CI_Controller{

    //Load model agar bisa digunakan di satu controller
      public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');

    }


    public function index(){
        // $this->load->database();

        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}