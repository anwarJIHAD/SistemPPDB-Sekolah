<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			is_logged_in2();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	// ... ada kode lain di sini ...
}