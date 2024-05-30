<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Calon_model', 'calon_model');
		$this->load->model('Tes_model', 'tes');
		$this->load->model('Konfigurasi_Model', 'konfigurasi');
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('CalonSiswa/Home');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('vw_login');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$calon = $this->db->get_where('calonsiswa', ['username' => $username])->row_array();
		if ($calon) {
			if (password_verify($password, $calon['password'])) {
				$data = [
					'nama_lengkap' => $calon['nama_lengkap'],
					'username' => $calon['username'],
					'id_siswa' => $calon['id_siswa'],
					'level' => $calon['level'],
				];
				$this->session->set_userdata($data);
				
					redirect('CalonSiswa/Home');
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Tedaftar! </div>');
			redirect('auth');
		}
	}

	// public function login()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');

	// 	$user = $this->auth_model->read_by_username($username);

	// 	if ($user) {

	// 		if (password_verify($password, $user->password)) {

	// 			$session = [
	// 				'id_pengguna' => $user->id_pengguna,
	// 				'nama_pengguna' => $user->nama_pengguna,
	// 				'username' => $user->username,
	// 				'hp_pengguna' => $user->hp_pengguna
	// 			];
	// 			$this->session->set_userdata($session);
	// 			redirect('Admin/Home');

	// 		} else {
	// 			$this->session->set_flashdata('error', 'Wrong password!');
	// 			redirect('');

	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Wrong username!');
	// 		redirect('');
	// 		var_dump($user);
	// 		die();
	// 	}
	// }

	public function logout()
	{
		$this->session->unset_userdata('id_siswa');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
		redirect('Landing');
	}

	public function regis()
	{
		if ($this->session->userdata('username')) {
			redirect('CalonSiswa/Home');
		}
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Pengguna Wajib di isi'
		]);
		$this->form_validation->set_rules('username', 'username', 'required', [
			'required' => 'username Pengguna Wajib di isi'
		]);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]',
			[
				'min_length' => 'Password Terlalu Pendek',
				'required' => 'password Pengguna Wajib di isi'
			]
		);
		if ($this->form_validation->run() == false) {
		$data['konfigurasi'] = $this->konfigurasi->get2();
		// var_dump($data['konfigurasi']);
		// die;
			$this->load->view('vw_registrasi',$data);
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level'=> 'siswa'
			];
			$data1 = [
				'username' => htmlspecialchars($this->input->post('username', true))
			];
			$this->calon_model->insert($data);
			$this->tes->insert($data1);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi Berhasil</div>');
			redirect('Auth');
		}
	}

}