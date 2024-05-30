<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('Profile_Model', 'calonsiswa');
		$this->load->model('Pembayaran_Model', 'pembayaran');
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->library('form_validation');
	}
	public function index()
	{

		$data['judul'] = "Halaman Data Pembayaran";
		$data['calonsiswa'] = $this->calonsiswa->get3();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/pembayaran/vw_pembayaran', $data);
		$this->load->view('admin/footer');

	}
	public function detail($id)
	{

		$data['judul'] = "Halaman Detail Pembayaran";
		$data['calonsiswa'] = $this->calonsiswa->getSiswaId($id);
		$data['pendaftaran'] = $this->pendaftaran->getSiswaId($id);
		$data['pembayaran'] = $this->pembayaran->getPembayaranId($id);
		$this->load->view('admin/header');
		$this->load->view('admin/pembayaran/vw_detail_bayar', $data);
		$this->load->view('admin/footer');

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
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->pembayaran->update(['id_bayar' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
            redirect('Admin/Pembayaran');
        }
    }


}