<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('PendaftaranOrtu_Model', 'orangtua');
    }

    public function index()
    {

		$data['orangtua'] = $this->orangtua->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $data['judul'] = "Formulir Biodata Orang Tua Siswa";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Data Orang Tua";
        $this->load->view('calonsiswa/Pendaftaran/vw_ortu', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function ortu2()
    {

        $data['orangtua'] = $this->orangtua->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $data['judul'] = "Formulir Biodata Orang Tua Siswa";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Data Orang Tua";
        $this->load->view('calonsiswa/Pendaftaran/vw_ortu2', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function Detail()
    {
        $data['judul'] = "Detail Data Orang Tua";
        $data['orangtua'] = $this->orangtua->getOrtuId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_detail_ortu',$data);
        $this->load->view('calonsiswa/footer');

    }
    public function add()
    {
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', [
            'required' => 'Nama Ayah Pengguna Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
           
            $this->load->view('vw_ortu');
        } else {
            $data = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
                'keterangan_ayah' => $this->input->post('keterangan_ayah'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'golongan_ayah' => $this->input->post('golongan_ayah'),
                'email_ayah' => $this->input->post('email_ayah'),
                'no_hp_ayah' => $this->input->post('no_hp_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'golongan_ibu' => $this->input->post('golongan_ibu'),
                'keterangan_ibu' => $this->input->post('keterangan_ibu'),
                'email_ibu' => $this->input->post('email_ibu'),
                'no_hp_ibu' => $this->input->post('no_hp_ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'jml_tanggungan' => $this->input->post('jml_tanggungan'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->orangtua->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Orang Tua Berhasil Berhasil Di Tambahkan</div>');
            redirect('CalonSiswa/KelengkapanData/DataOrtu');
        }
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['orangtua'] = $this->orangtua->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_ayah', 'Nama Orang Tua', 'required', [
            'required' => 'Nama Orang Tua wajib di isi ya,, please dehh'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_data_ortu", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $data = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
                'keterangan_ayah' => $this->input->post('keterangan_ayah'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'golongan_ayah' => $this->input->post('golongan_ayah'),
                'email_ayah' => $this->input->post('email_ayah'),
                'no_hp_ayah' => $this->input->post('no_hp_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'golongan_ibu' => $this->input->post('golongan_ibu'),
                'keterangan_ibu' => $this->input->post('keterangan_ibu'),
                'email_ibu' => $this->input->post('email_ibu'),
                'no_hp_ibu' => $this->input->post('no_hp_ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'jml_tanggungan' => $this->input->post('jml_tanggungan'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->orangtua->update(['id_ortu'=>$id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Orang Tua Berhasil Berhasil Di Ubah!</div>');
            redirect('CalonSiswa/KelengkapanData/DataOrtu');
        }
    }
}