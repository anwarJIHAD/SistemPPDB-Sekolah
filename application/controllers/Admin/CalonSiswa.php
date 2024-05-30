<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalonSiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			is_logged_in2();
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');

	}
	
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/siswa/vw_siswa');
		$this->load->view('admin/footer');
		
	}
}
