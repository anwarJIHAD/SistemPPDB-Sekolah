<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forbiden extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('pengguna', ['id_pengguna' => $this->session->userdata('id_pengguna')])->row_array();
        $data['user2'] = $this->db->get_where('calonsiswa', ['id_siswa' => $this->session->userdata('id_siswa')])->row_array();
        $this->load->view("forbiden", $data);
    }
}