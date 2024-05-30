<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VerifikasiLulus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in4();

        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');


    }

    public function index()
    {

    }

    function edit($id)
    {

        $data['judul'] = "Halaman Ubah";
        $data['pendaftaran'] = $this->pendaftaran->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("panitiapsb/header", $data);
            $this->load->view("panitiapsb/kelulusan/vw_verifikasi_lulus", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->pendaftaran->update(['id_siswa' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
            redirect('PanitiaPSB/Kelulusan');
        }
    }


}