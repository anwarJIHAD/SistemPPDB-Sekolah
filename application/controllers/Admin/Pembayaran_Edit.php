<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_Edit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        
        $this->load->model('Pembayaran_Model', 'pembayaran');

    }

    public function index()
    {

    }
    
    function edit($id)
    {

        $data['judul'] = "Halaman Ubah";
        $data['pembayaran'] = $this->pembayaran->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/header", $data);
            $this->load->view("admin/pembayaran/vw_verifikasi_bayar", $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->pembayaran->update(['id_siswa' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Pembayaran siswa berhasil di ubah!</div>');
            redirect('Admin/Pembayaran');
        }
    }


}