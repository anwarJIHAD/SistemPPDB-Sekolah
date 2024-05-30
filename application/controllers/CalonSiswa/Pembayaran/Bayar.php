<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bayar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
		$this->load->model('Pembayaran_Model', 'pembayaran');

    }

    public function index()
    {

        $this->load->view('calonsiswa/header');
		$data['judul'] = "Formulir Pembayaran";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Bukti Pembayaran";
        $data['pembayaran'] = $this->pembayaran->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/Pembayaran/vw_pembayaran',$data);
        $this->load->view('calonsiswa/footer');

    }
    public function Detail()
    {
        $data['judul'] = "Detail Pembayaran Siswa";
        $data['pembayaran'] = $this->pembayaran->getPembayaranId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_detail_pembayaran', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function add()
    {
        $this->form_validation->set_rules('nominal', 'Nominal', 'required', [
            'required' => 'Nominal Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('vw_calonsiswa');
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');

            $data = [
                'nominal' => $this->input->post('nominal'),
                'gambar' => $this->input->post('gambar'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->pembayaran->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Upload Bukti Bayar Berhasil</div>');
            redirect('CalonSiswa/kelengkapandata/DataPembayaran');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['pembayaran'] = $this->pembayaran->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nominal', 'Nominal', 'required', [
            'required' => 'Nominal Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_data_pembayaran", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');
            $data = [
                'nominal' => $this->input->post('nominal'),
                'gambar' => $this->input->post('gambar'),
                'id_siswa' => $this->session->userdata('id_siswa'),
                
            ];
            $this->pembayaran->update(['id_bayar' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Bukti Bayar Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/DataPembayaran');
        }
    }
}