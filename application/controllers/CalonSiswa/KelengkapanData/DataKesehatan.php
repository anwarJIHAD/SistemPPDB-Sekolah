<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataKesehatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('PendaftaranKesehatan_Model', 'kesehatan');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Riwayat Kesehatan Siswa";
        $data['kesehatan'] = $this->kesehatan->getKesehatanId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_kesehatan', $data);
        $this->load->view('calonsiswa/footer');

    }
}