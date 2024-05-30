<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_Edit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in4();
        $this->load->model('CalonSiswa_Model', 'calonsiswa');
        $this->load->model('Tes_Model', 'tes');

    }

    public function index()
    {

    }

    public function verifikasi_lulus($id)
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
            $this->load->view("panitiapsb/tes/vw_ubah_status", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data1 = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            // $this->tes->update(['username' => $id], $data);
            $this->tes->update($id, $data1);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status nilai tes calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/tes/lulus');
        }
    }
    public function verifikasi_tidak_lulus($id)
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
            $this->load->view("panitiapsb/tes/vw_ubah_status", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data1 = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->tes->update($id, $data1);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status nilai tes calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/tes/tidak_lulus');
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
            $this->load->view("panitiapsb/tes/vw_ubah_status", $data);
            $this->load->view('panitiapsb/footer', $data);
        } else {
            $data1 = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->tes->update($id, $data1);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berkas calon siswa berhasil di ubah!</div>');
            redirect('panitiapsb/tes/belum_diverifikasi');
        }
    }


}