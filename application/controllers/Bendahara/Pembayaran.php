<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('CalonSiswa_Model', 'calonsiswa');
        $this->load->model('Profile_Model', 'calonsiswa');
        $this->load->model('Pembayaran_Model', 'pembayaran');
        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pembayaran";
        $data['calonsiswa'] = $this->calonsiswa->get3();
        $this->load->view('bendahara/header', $data);
        $this->load->view('bendahara/pembayaran/vw_pembayaran', $data);
        $this->load->view('bendahara/footer');

    }
    public function detail($id)
    {

        $data['calonsiswa'] = $this->calonsiswa->getSiswaId($id);
        $data['pendaftaran'] = $this->pendaftaran->getSiswaId($id);
        $data['pembayaran'] = $this->pembayaran->getPembayaranId($id);
        $this->load->view('bendahara/header');
        $this->load->view('bendahara/pembayaran/vw_detail_bayar', $data);
        $this->load->view('bendahara/footer');

    }
}