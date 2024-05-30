<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPendidikan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('PendaftaranPendidikan_Model', 'pendidikan');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pendidikan Sebelumnya";
        $data['pendidikan'] = $this->pendidikan->getPendidikanId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_pendidikan', $data);
        $this->load->view('calonsiswa/footer');

    }
}