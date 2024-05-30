<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('Prestasi_Model','prestasi');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Prestasi";
		$data['prestasi']=$this->prestasi->get();
		$this->load->view('admin/header');
		$this->load->view('admin/informasi/prestasi/vw_prestasi',$data);
		$this->load->view('admin/footer');
		
	}
	public function hapus($id){
		$this->prestasi->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Prestasi Berhasil dihapus!</div>');
		redirect('Admin/Informasi/Prestasi');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Prestasi";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_prestasi', 'Nama Prestasi', 'required', [
			'required' => 'Nama Prestasi Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Pretasi', 'required', [
			'required' => 'Deskripsi Prestasi Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//	'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/prestasi/vw_tambah", $data);
			$this->load->view("admin/footer");
		} else {
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
			//var_dump( $this->upload->data('file_name'));die();
			
			$data = [
				'nama_prestasi' => $this->input->post('nama_prestasi'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
		
			];
			$this->prestasi->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prestasi Berhasil Ditambah!</div>');
			redirect('Admin/Informasi/Prestasi');
		}
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['prestasi'] = $this->prestasi->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('nama_prestasi', 'Nama Prestasi', 'required', [
			'required' => 'Nama Prestasi Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Prestasi', 'required', [
			'required' => 'Deskripsi Prestasi Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//	'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/prestasi/vw_ubah", $data);
			$this->load->view("admin/footer");
		} else {
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

			$this->load->library('upload', $config);
			$this->load->helper('file');
			delete_files (FCPATH . 'uploads/' . $data ['prestasi'] ['gambar'] );
			$this->upload->do_upload('gambar');
			//var_dump( $this->upload->data('file_name'));die();
			
			$data = [
				'nama_prestasi' => $this->input->post('nama_prestasi'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
				'id_prestasi' => $this->input->post('id_prestasi')
			];
			$this->prestasi->update($data,$data ['id_prestasi']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prestasi Berhasil Diubah!</div>');
			redirect('Admin/Informasi/Prestasi');
		}
	}
}
