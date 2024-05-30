<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('CalonSiswa_Model', 'calonsiswa');
        $this->load->model('Profile_Model', 'calonsiswa');
        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
        $this->load->model('PendaftaranOrtu_Model', 'orangtua');
        $this->load->model('PendaftaranKesehatan_Model', 'kesehatan');
        $this->load->model('Persyaratan_Model', 'dokumen');
        $this->load->model('Pembayaran_Model', 'pembayaran');
        $this->load->model('Tes_Model', 'tes');
    }

    // ... ada kode lain di sini ...
    public function index()
    {

        $id = $this->session->userdata('id_siswa');
        $username = $this->session->userdata('username');
        $this->data['cek'] = $this->calonsiswa->get_status_id($id);
        $this->data['cek_bayar'] = $this->calonsiswa->get_bayar_id($id);
        $this->data['cek_nilai'] = $this->calonsiswa->get_nilai_id($username);
        $this->data['cek_tes'] = $this->calonsiswa->get_tes_id($username);

        $data['dokumen'] = $this->dokumen->getDokumenId($this->session->userdata('id_siswa'));

        if ($data['dokumen'][0]['kip'] == '') {
            $this->data['nilai'] = 1;
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">silahkan lengkapi berkas....!</div>');
        } else {
            $this->data['nilai'] = 0;
        }



        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/index', $this->data);
        $this->load->view('calonsiswa/footer');


    }

}