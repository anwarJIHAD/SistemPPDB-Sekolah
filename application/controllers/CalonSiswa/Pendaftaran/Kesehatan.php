<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); 
        $this->load->library('form_validation');
        $this->load->model('PendaftaranKesehatan_Model', 'kesehatan');
    }

    public function index()
    {

		$data['kesehatan'] = $this->kesehatan->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $data['judul'] = "Formulir Data Kesehatan Siswa";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Data Kesehatan";
        $this->load->view('calonsiswa/Pendaftaran/vw_kesehatan', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function add()
    {
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required', [
            'required' => 'Berat Badan Calon Siswa Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('vw_kesehatan');
        } else {
            $data = [
                'berat_badan' => $this->input->post('berat_badan'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
                'gol_darah' => $this->input->post('gol_darah'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->kesehatan->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riwayat Kesehatan Siswa Berhasil DiTambahkan</div>');
            redirect('CalonSiswa/KelengkapanData/DataKesehatan');
        }
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['kesehatan'] = $this->kesehatan->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required', [
            'required' => 'Berat Badan Calon Siswa Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_data_kesehatan", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $data = [
                'berat_badan' => $this->input->post('berat_badan'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
                'gol_darah' => $this->input->post('gol_darah'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->kesehatan->update(['id_kesehatan' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riwayat Kesehatan Siswa Berhasil Diubah!</div>');
            redirect('CalonSiswa/KelengkapanData/DataKesehatan');
        }
    }

}