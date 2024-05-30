<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('PendaftaranPendidikan_Model', 'pendidikan');
    }

    public function index()
    {

        $data['pendidikan'] = $this->pendidikan->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $data['judul'] = "Formulir Data Pendidikan Sebelumnya";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Data Pendidikan Sebelumnya";
        $this->load->view('calonsiswa/Pendaftaran/vw_pendidikan', $data);
        $this->load->view('calonsiswa/footer');

    }
   
    public function add()
    {
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
            'required' => 'Asal Sekolah Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('vw_pendidikan');
        } else {
            $data = [
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'nisn' => $this->input->post('nisn'),
                'npsn' => $this->input->post('npsn'),
                'status_sekolah' => $this->input->post('status_sekolah'),
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tgl_ijazah' => $this->input->post('tgl_ijazah'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->pendidikan->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pendidikan Calon Siswa Berhasil Di Tambahkan</div>');
            redirect('CalonSiswa/KelengkapanData/DataPendidikan');
        }
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['pendidikan'] = $this->pendidikan->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
            'required' => 'Asal Sekolah Wajib di isi'
        ]);


        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_data_pendidikan", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $data = [
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'nisn' => $this->input->post('nisn'),
                'npsn' => $this->input->post('npsn'),
                'status_sekolah' => $this->input->post('status_sekolah'),
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tgl_ijazah' => $this->input->post('tgl_ijazah'),
                'id_siswa' => $this->session->userdata('id_siswa'),
            ];
            $this->pendidikan->update(['id_pendidikan' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pendidikan Calon Siswa Berhasil Di Ubah!</div>');
            redirect('CalonSiswa/KelengkapanData/DataPendidikan');
        }
    }
}