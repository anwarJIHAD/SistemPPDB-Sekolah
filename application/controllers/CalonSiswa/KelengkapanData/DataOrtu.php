<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataOrtu extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('PendaftaranOrtu_Model', 'orangtua');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Orang Tua";
        $data['orangtua'] = $this->orangtua->getOrtuId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_data_ortu', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function Detail()
    {
        $data['judul'] = "Detail Data Orang Tua ";
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_detail_ortu',$data);
        $this->load->view('calonsiswa/footer');

    }
   


}