<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Calon_Model', 'calonsiswa');
        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Siswa";
        
        $data['pendaftaran'] = $this->pendaftaran->getSiswaId($this->session->userdata('id_siswa'));
        // $data['list'] = $this->calonsiswa->getsiswabyid($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_siswa', $data);
        $this->load->view('calonsiswa/footer');

    }
}