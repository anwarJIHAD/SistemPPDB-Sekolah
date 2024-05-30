<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('Fasilitas_Model','fasilitas');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']="Halaman Fasilitas";
		$data['fasilitas']=$this->fasilitas->get();
		$this->load->view('admin/header');
		$this->load->view('admin/informasi/fasilitas/vw_fasilitas',$data);
		$this->load->view('admin/footer');
		
	}
	public function hapus($id){
		$this->fasilitas->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Fasilitas Berhasil dihapus!</div>');
		redirect('Admin/Informasi/Fasilitas');
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Fasilitas";

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required', [
			'required' => 'Nama Fasilitas Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Fasilitas', 'required', [
			'required' => 'Deskripsi Fasilitas Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//	'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/fasilitas/vw_tambah", $data);
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
				'nama_fasilitas' => $this->input->post('nama_fasilitas'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
		
			];
			$this->fasilitas->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Fasilitas Berhasil Ditambah!</div>');
			redirect('Admin/Informasi/Fasilitas');
		}
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Ubah";
		$data['fasilitas'] = $this->fasilitas->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required', [
			'required' => 'Nama Fasilitas Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Fasilitas', 'required', [
			'required' => 'Deskripsi Fasilitas Wajib di isi'
		]);
		//$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
		//	'required' => 'Gambar Wajib di isi'
		//]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header", $data);
			$this->load->view("admin/informasi/fasilitas/vw_ubah", $data);
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
			delete_files (FCPATH . 'uploads/' . $data ['fasilitas'] ['gambar'] );
			$this->upload->do_upload('gambar');
			//var_dump( $this->upload->data('file_name'));die();
			
			$data = [
				'nama_fasilitas' => $this->input->post('nama_fasilitas'),
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $this->upload->data('file_name'),
				'id_fasilitas' => $this->input->post('id_fasilitas')
			];
			$this->fasilitas->update($data,$data ['id_fasilitas']);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Fasilitas Berhasil Diubah!</div>');
			redirect('Admin/Informasi/Fasilitas');
		}
	}
}
