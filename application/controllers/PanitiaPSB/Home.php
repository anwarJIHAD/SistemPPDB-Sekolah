<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in4();
		$this->load->model('CalonSiswa_Model', 'calonsiswa');
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->model('Tes_Model', 'tes');
		$this->load->model('Auth_Model','calon');
		
	}

	public function index()
	{
		$data['jml_siswa'] = $this->calonsiswa->jml_siswa();
		$data['jml_lulus'] = $this->pendaftaran->jml_lulus();
		$data['jml_lulus_tes'] = $this->tes->jml_lulus_tes();
		$this->load->view('panitiapsb/header');
		$this->load->view('panitiapsb/index',$data);
		$this->load->view('panitiapsb/footer');
		
	}
	
}
