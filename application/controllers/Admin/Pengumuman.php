<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in2();

    $this->load->model('Pengumuman_Model', 'pengumuman');

  }

  public function index()
  {
    $data['judul'] = "Pengaturan Jadwal Pengumuman";
		$data['pengumuman'] = $this->pengumuman->get();
    $this->load->view("admin/header", $data);
    $this->load->view("admin/pengumuman/vw_pengumuman", $data);
    $this->load->view("admin/footer");
  }

  public function edit($id)
  {
    $data['judul'] = "Pengaturan Jadwal Pengumuman";
		$data['pengumuman'] = $this->pengumuman->getById($id);

    // $data['pengumuman'] = $this->pengumuman->getById();
    // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', [
      'required' => 'Tanggal Buka Wajib di isi'
 
    ]);
    //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
    //'required' => 'Gambar Wajib di isi'
    //]);

    if ($this->form_validation->run() == false) {
      $this->load->view("admin/header", $data);
      $this->load->view("admin/pengumuman/vw_ubah_pengumuman", $data);
      $this->load->view("admin/footer");
    } else {
   
      $data = [
        'tgl_buka' => $this->input->post('tgl_buka'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),
        'id_pengumuman' => $this->input->post('id_pengumuman'),

      ];
  
      $this->pengumuman->update($data, $data['id_pengumuman']);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengaturan Konfigurasi Berhasil Diubah!</div>');
      redirect('Admin/Konfigurasi');
    }
  }


}