<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('Ekskul_Model','ekskul');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Ekstrakurikuler";
		$data['ekskul']=$this->ekskul->get();
		$this->load->view('admin/header');
		$this->load->view('admin/informasi/ekskul/vw_ekskul',$data);
		$this->load->view('admin/footer');
		
	}
	public function hapus($id){
		$this->ekskul->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Ekskul Berhasil dihapus!</div>');
		redirect('Admin/Informasi/Ekskul');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Ekstrakurikuler";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_ekskul', 'Nama Ekskul', 'required', [
			'required' => 'Nama Ekskul Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Ekskul', 'required', [
			'required' => 'Deskripsi Ekskul Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//	'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/ekskul/vw_tambah", $data);
			$this->load->view("admin/footer");
		}  else {
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
				'nama_ekskul' => $this->input->post('nama_ekskul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
		
			];
			$this->ekskul->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ekskul Berhasil Ditambah!</div>');
			redirect('Admin/Informasi/Ekskul');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['ekskul'] = $this->ekskul->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('nama_ekskul', 'Nama Ekskul', 'required', [
			'required' => 'Judul Ekskul Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Ekskul', 'required', [
			'required' => 'Isi Ekskul Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/ekskul/vw_ubah", $data);
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
			delete_files (FCPATH . 'uploads/' . $data ['ekskul'] ['gambar'] );
			$this->upload->do_upload('gambar');
			//var_dump( $this->upload->data('file_name'));die();
			
			$data = [
				'nama_ekskul' => $this->input->post('nama_ekskul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
				'id_ekskul' => $this->input->post('id_ekskul')
			];
			$this->ekskul->update($data,$data ['id_ekskul']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ekskul Berhasil Diubah!</div>');
			redirect('Admin/Informasi/Ekskul');
		}
	}
}
