<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CalonSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in4();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('Profile_Model', 'calonsiswa');
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->model('PendaftaranOrtu_Model', 'orangtua');
		$this->load->model('PendaftaranKesehatan_Model', 'kesehatan');
		$this->load->model('PendaftaranPendidikan_Model', 'pendidikan');
		$this->load->model('Persyaratan_Model', 'dokumen');
		$this->load->model('Pembayaran_Model', 'pembayaran');

		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Halaman Data Siswa";
		$data['calonsiswa'] = $this->calonsiswa->get2();
		$this->load->view('panitiapsb/header', $data);
		$this->load->view('panitiapsb/siswa/vw_siswa', $data);
		$this->load->view('panitiapsb/footer');

	}
	public function detail($id)
    {

		$data['judul'] = "Halaman Detail Siswa";
		$data['calonsiswa'] = $this->calonsiswa->getSiswaId($id);
		$data['pendaftaran'] = $this->pendaftaran->getSiswaId($id);
        $data['orangtua'] = $this->orangtua->getOrtuId($id);
        $data['kesehatan'] = $this->kesehatan->getKesehatanId($id);
		$data['pendidikan'] = $this->pendidikan->getPendidikanId($id);
        $data['dokumen'] = $this->dokumen->getDokumenId($id);
		$data['pembayaran'] = $this->pembayaran->getPembayaranId($id);
        $this->load->view('panitiapsb/header');
		$this->load->view('panitiapsb/siswa/vw_detail_siswa',$data);
		$this->load->view('panitiapsb/footer');

    }

	public function hapus($id)
	{
		$this->dokumen->deleteBy($id);
		$this->pendaftaran->deleteBy($id);
		$this->pembayaran->deleteBy($id);
		$this->periodik->deleteBy($id);
		$this->orangtua->deleteBy($id);
		$this->calonsiswa->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Semua Data Yang Berkaitan dengan Siswa Berhasil dihapus!</div>');
		redirect('PanitiaPSB/CalonSiswa');
}
}