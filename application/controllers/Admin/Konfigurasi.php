<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in2();

    $this->load->model('Konfigurasi_Model', 'konfigurasi');

  }

  public function index()
  {
    $data['judul'] = "Pengaturan Jadwal Pendaftaran";
		$data['konfigurasi'] = $this->konfigurasi->get();
    $this->load->view("admin/header", $data);
    $this->load->view("admin/konfigurasi/vw_konfigurasi", $data);
    $this->load->view("admin/footer");
  }

  public function edit($id)
  {
    $data['judul'] = "Pengaturan Jadwal Pendaftaran";
		$data['konfigurasi'] = $this->konfigurasi->getById($id);

    // $data['konfigurasi'] = $this->konfigurasi->getById();
    // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', [
      'required' => 'Tanggal Buka Wajib di isi'
 
    ]);
    //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
    //'required' => 'Gambar Wajib di isi'
    //]);

    if ($this->form_validation->run() == false) {
      $this->load->view("admin/header", $data);
      $this->load->view("admin/konfigurasi/vw_ubah_konfigurasi", $data);
      $this->load->view("admin/footer");
    } else {
   
      $data = [
        'gelombang' => $this->input->post('gelombang'),
        'tahun_ajaran' => $this->input->post('tahun_ajaran'),
        'tgl_buka' => $this->input->post('tgl_buka'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),
        'setdaftar' => $this->input->post('setdaftar'),
        'id_konfigurasi' => $this->input->post('id_konfigurasi'),

      ];
  
      $this->konfigurasi->update($data, $data['id_konfigurasi']);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengaturan Konfigurasi Berhasil Diubah!</div>');
      redirect('Admin/Konfigurasi');
    }
  }


}