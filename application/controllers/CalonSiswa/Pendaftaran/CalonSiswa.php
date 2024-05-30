<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CalonSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('PendaftaranCalonSiswa_Model', 'pendaftaran');
		$this->load->library('form_validation');

	}


	public function index()
	{

		$data['user'] = $this->db->get_where('calonsiswa', ['id_siswa' => $this->session->userdata('id_siswa')])->row_array();
		
		$data['pendaftaran'] = $this->pendaftaran->get2($this->session->userdata('id_siswa'));
		$this->load->view('calonsiswa/header', $data);
		$data['judul'] = "Formulir Biodata Calon Siswa";
		$data['judul1'] = "Maaf Anda Telah Memasukkan Biodata";
		$this->load->view('calonsiswa/Pendaftaran/vw_calonsiswa',$data);
		$this->load->view('calonsiswa/footer',$data);
	}
	public function Detail()
	{
		$data['judul'] = "Detail Data Calon Siswa";
		$data['pendaftaran'] = $this->pendaftaran->getSiswaId($this->session->userdata('id_siswa'));
		$this->load->view('calonsiswa/header');
		$this->load->view('calonsiswa/kelengkapan_data/vw_detail_siswa', $data);
		$this->load->view('calonsiswa/footer');

	}

	public function add()
	{
		
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Calon Siswa Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
		


			$this->load->view('vw_calonsiswa');
		} else {
			$data = [
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nik' => $this->input->post('nik'),
				'cita-cita' => $this->input->post('cita-cita'),
				'waktu' => $this->input->post('waktu'),
				'jarak' => $this->input->post('jarak'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'tempat_tinggal' => $this->input->post('tempat_tinggal'),
				'transportasi' => $this->input->post('transportasi'),
				'kebutuhan_khusus' => $this->input->post('kebutuhan_khusus'),
				'disabilitas' => $this->input->post('disabilitas'),
				'biaya' => $this->input->post('biaya'),
				'anak' => $this->input->post('anak'),
				'alamat' => $this->input->post('alamat'),
				'pernah_tk' => $this->input->post('pernah_tk'),
				'saudara' => $this->input->post('saudara'),
				'id_siswa' => $this->session->userdata('id_siswa'),

			];
			$this->pendaftaran->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Calon Siswa Berhasil Di Tambahkan</div>');
			redirect('CalonSiswa/kelengkapandata/DataSiswa');
		}
	}
	public function edit($id)
    {
		// var_dump($id);
		// die();
        $data['judul'] = "Halaman Ubah";
        $data['pendaftaran'] = $this->pendaftaran->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Calon Siswa Wajib di isi'
        ]);
       
        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_data_siswa", $data);
			$this->load->view('calonsiswa/footer', $data);
        } else {
            $data = [
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nik' => $this->input->post('nik'),
				'cita-cita' => $this->input->post('cita-cita'),
				'waktu' => $this->input->post('waktu'),
				'jarak' => $this->input->post('jarak'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'tempat_tinggal' => $this->input->post('tempat_tinggal'),
				'transportasi' => $this->input->post('transportasi'),
				'kebutuhan_khusus' => $this->input->post('kebutuhan_khusus'),
				'disabilitas' => $this->input->post('disabilitas'),
				'biaya' => $this->input->post('biaya'),
				'anak' => $this->input->post('anak'),
				'alamat' => $this->input->post('alamat'),
				'pernah_tk' => $this->input->post('pernah_tk'),
				'saudara' => $this->input->post('saudara'),
				'id_siswa' => $this->session->userdata('id_siswa'),
            ];

            $this->pendaftaran->update(['id_pendaftaran'=>$id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Biodata Calon Siswa Diubah!</div>');
            redirect('CalonSiswa/KelengkapanData/DataSiswa');
        }
    }
}