<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syarat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();

        $this->load->model('Syarat_Model', 'syarat');

    }

    public function index()
    {
        $data['judul'] = "Pengaturan  Syarat Pendaftaran";
        $data['syarat'] = $this->syarat->get();
        $this->load->view("admin/header", $data);
        $this->load->view("admin/informasi/syarat/vw_syarat", $data);
        $this->load->view("admin/footer");
    }

    public function edit($id)
    {
        $data['judul'] = "Pengaturan  Syarat Pendaftaran";
        $data['syarat'] = $this->syarat->getById($id);

        // $data['syarat'] = $this->syarat->getById();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('syarat', 'Syarat', 'required', [
            'required' => 'Syarat Wajib di isi'

        ]);
        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/header", $data);
            $this->load->view("admin/informasi/syarat/vw_ubah", $data);
            $this->load->view("admin/footer");
        } else {

            $data = [
                'syarat' => $this->input->post('syarat'),
                'bayar' => $this->input->post('bayar'),
                'id_syarat' => $this->input->post('id_syarat'),

            ];

            $this->syarat->update($data, $data['id_syarat']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengaturan Persyaratan Berhasil Diubah!</div>');
            redirect('Admin/Informasi/Syarat');
        }
    }


}