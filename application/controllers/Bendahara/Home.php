<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in3();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('Pembayaran_Model', 'pembayaran');
		$this->load->model('Auth_Model', 'calon');

	}

	public function index()
	{
		$data['jml_siswa'] = $this->calonsiswa->jml_siswa();
		$data['jml_lunas'] = $this->pembayaran->jml_lunas();
		$this->load->view('bendahara/header');
		$this->load->view('bendahara/index', $data);
		$this->load->view('bendahara/footer');

	}


}