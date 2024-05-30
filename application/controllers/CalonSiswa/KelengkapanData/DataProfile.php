<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProfile extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Profile_Model', 'calonsiswa');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Profil Siswa";
        $data['calonsiswa'] = $this->calonsiswa->getSiswaId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_profile',$data);
        $this->load->view('calonsiswa/footer');

    }
    	public function edit($id)
    {
		// var_dump($id);
		// die();
        $data['judul'] = "Halaman Ubah";
        $data['calonsiswa'] = $this->calonsiswa->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Calon Siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('username', 'username', 'required', [
            'required' => 'username Calon Siswa Wajib di isi'
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
       
        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_profil", $data);
			$this->load->view('calonsiswa/footer', $data);
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_siswa' => $this->input->post('id_siswa')

                
            ];

            $this->calonsiswa->update($data, $data ['id_siswa']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Siswa Berhasil Diubah!</div>');
            redirect('CalonSiswa/KelengkapanData/DataProfile');
        }
    }
}