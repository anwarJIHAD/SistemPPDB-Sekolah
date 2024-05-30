<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPersyaratan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Persyaratan_Model', 'dokumen');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Persyaratan";
        $data['dokumen'] = $this->dokumen->getDokumenId($this->session->userdata('id_siswa'));
        
       
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_persyaratan', $data);
        $this->load->view('calonsiswa/footer');

    }
}