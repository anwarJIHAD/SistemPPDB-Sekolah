<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_Model', 'pengguna');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pengguna";
        $data['pengguna'] = $this->pengguna->get();
        $this->load->view('admin/header');
        $this->load->view('admin/pengguna/vw_pengguna', $data);
        $this->load->view('admin/footer');

    }
    public function hapus($id)
    {
        $this->pengguna->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data pengguna Berhasil dihapus!</div>');
        redirect('Admin/Informasi/pengguna');
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Ekstrakurikuler";

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pengguna', 'Nama pengguna', 'required', [
            'required' => 'Nama pengguna Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi pengguna', 'required', [
            'required' => 'Deskripsi pengguna Wajib di isi'
        ]);
        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //	'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/header", $data);
            $this->load->view("admin/informasi/pengguna/vw_tambah", $data);
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
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $this->upload->data('file_name'),

            ];
            $this->pengguna->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pengguna Berhasil Ditambah!</div>');
            redirect('Admin/Informasi/pengguna');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['pengguna'] = $this->pengguna->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pengguna', 'Nama pengguna', 'required', [
            'required' => 'Nama pengguna Wajib di isi'
        ]);
        $this->form_validation->set_rules('hp_pengguna', 'hp pengguna', 'required', [
            'required' => 'no hp pengguna Wajib di isi'
        ]);
        $this->form_validation->set_rules('username', 'username', 'required', [
            'required' => 'username pengguna Wajib di isi'
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
            $this->load->view("admin/header", $data);
            $this->load->view("admin/pengguna/vw_ubah", $data);
            $this->load->view("admin/footer");
        } else {
            $data = [
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'hp_pengguna' => $this->input->post('hp_pengguna'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_pengguna' => $this->input->post('id_pengguna')
            ];
            $this->pengguna->update($data, $data['id_pengguna']);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pengguna Berhasil Diubah!</div>');
            redirect('Admin/pengguna');
        }
    }
}