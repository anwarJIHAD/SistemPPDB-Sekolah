<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Pembayaran_Model', 'pembayaran');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pembayaran";
        $data['pembayaran'] = $this->pembayaran->getPembayaranId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_pembayaran', $data);
        $this->load->view('calonsiswa/footer');

    }
}