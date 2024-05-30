<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('CalonSiswa_Model', 'calonsiswa');
        $this->load->model('Profile_Model', 'calonsiswa');
        $this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
        $this->load->model('PendaftaranOrtu_Model', 'orangtua');
        $this->load->model('PendaftaranKesehatan_Model', 'kesehatan');
        $this->load->model('PendaftaranPendidikan_Model', 'pendidikan');
        $this->load->model('Persyaratan_Model', 'dokumen');
        $this->load->model('Tes_Model', 'tes');
        $this->load->model('Pembayaran_Model', 'pembayaran');

        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Nilai Calon Siswa";
        $data['calonsiswa'] = $this->calonsiswa->get4();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tes/vw_tes', $data);
        $this->load->view('admin/footer');

    }
    public function lulus()
    {
        $data['judul'] = "Halaman Data Nilai Calon Siswa Lulus";
        $data['calonsiswa'] = $this->calonsiswa->get_lulus();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tes/vw_lulus', $data);
        $this->load->view('admin/footer');
    }

    public function tidak_lulus()
    {
        $data['judul'] = "Halaman Data Nilai Calon Siswa Tidak Lulus";
        $data['calonsiswa'] = $this->calonsiswa->get_tidak_lulus();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tes/vw_tidak_lulus', $data);
        $this->load->view('admin/footer');
    }

    public function belum_diverifikasi()
    {
        $data['judul'] = "Halaman Data Nilai Calon Siswa Belum Diverifikasi";
        $data['calonsiswa'] = $this->calonsiswa->get_belum_verifikasi();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tes/vw_verifikasi', $data);
        $this->load->view('admin/footer');
    }
    public function verifikasi($id)
    {  
        

        $data['judul'] = "Halaman ubah";
	
        $data['calonsiswa'] = $this->calonsiswa->getById($id);
        // var_dump($data['calonsiswa']);
        // die();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nilai', 'Nilai', 'required', [
            'required' => 'Nilai Wajib di isi'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            
            $this->load->view("admin/header", $data);
            $this->load->view("admin/tes/vw_ubah", $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data1 = [
                'nilai' => $this->input->post('nilai'),
                'status' => $this->input->post('status')
            ];
            // var_dump($id);die();
            $this->tes->update($id,$data1);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Nilai Tes calon siswa berhasil di ubah!</div>');
            redirect('admin/tes');
        }
    }
    public function hapus($id)
    {
        $this->tes->deleteBy($id);
        $this->calonsiswa->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Tes Berhasil dihapus!</div>');
        redirect('Admin/Tes');
    }
}