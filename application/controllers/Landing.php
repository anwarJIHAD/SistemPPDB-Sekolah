<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_Model', 'calon');
		$this->load->model('Konfigurasi_Model', 'konfigurasi');
		$this->load->model('Pengumuman_Model', 'pengumuman');
		$this->load->model('Ekskul_Model', 'ekskul');
		$this->load->model('Fasilitas_Model', 'fasilitas');
		$this->load->model('Prestasi_Model', 'prestasi');
		$this->load->model('Syarat_Model', 'syarat');
	}
	public function index()
	{
		$data['konfigurasi'] = $this->konfigurasi->get();
		$data['pengumuman'] = $this->pengumuman->get();
		$data['ekskul'] = $this->ekskul->get();
		$data['fasilitas'] = $this->fasilitas->get();
		$data['prestasi'] = $this->prestasi->get();
		$data['syarat'] = $this->syarat->get();
		$this->load->view('user/index', $data);
	}
	function tambah()
	{

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Wajib di isi'
		]);
		$this->form_validation->set_rules('no_hp', 'No HP', 'required', [
			'required' => 'No HP Wajib di isi'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'Username Wajib di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('user/index');
		} else {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			];
			$this->calon->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Siswa Berhasil Ditambah!</div>');
			redirect('Landing');
		}
	}
}