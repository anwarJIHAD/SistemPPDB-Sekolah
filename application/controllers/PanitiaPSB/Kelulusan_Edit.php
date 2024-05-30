<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelulusan_Edit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in4();
        $this->load->model('CalonSiswa_Model', 'calonsiswa');
        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');

    }

    public function index()
    {

    }

    public function verifikasi_terima($id)
    {

        $data['judul'] = "Halaman Ubah Status";
        $data['calonsiswa'] = $this->calonsiswa->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("panitiapsb/header", $data);
            $this->load->view("panitiapsb/siswa/vw_ubah", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->pendaftaran->update(['id_siswa' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berkas calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/kelulusan/terima');
        }
    }
    public function verifikasi_tolak($id)
    {

        $data['judul'] = "Halaman Ubah Status";
        $data['calonsiswa'] = $this->calonsiswa->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("panitiapsb/header", $data);
            $this->load->view("panitiapsb/siswa/vw_ubah", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->pendaftaran->update(['id_siswa' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berkas Calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/kelulusan/tolak');
        }
    }
    public function verifikasi_belum($id)
    {

        $data['judul'] = "Halaman Ubah Status";
        $data['calonsiswa'] = $this->calonsiswa->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("panitiapsb/header", $data);
            $this->load->view("panitiapsb/siswa/vw_ubah", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->pendaftaran->update(['id_siswa' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berkas Calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/kelulusan/belum_diverifikasi');
        }
    }


}