<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Persyaratan_Model', 'dokumen');
    }

    public function index()
    {

        $this->load->view('calonsiswa/header');
        $data['judul'] = "Formulir Persyaratan";
        $data['judul1'] = "Maaf Anda Telah Memasukkan Berkas Persyaratan";
        $data['dokumen'] = $this->dokumen->get2($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/Persyaratan/vw_dokumen',$data);
        $this->load->view('calonsiswa/footer');

    }
    public function Detail()
    {
        $data['dokumen'] = $this->dokumen->getDokumenId($this->session->userdata('id_siswa'));
        $this->load->view('calonsiswa/header');
        $this->load->view('calonsiswa/kelengkapan_data/vw_detail_persyaratan', $data);
        $this->load->view('calonsiswa/footer');

    }
    public function add()
    {
        // $this->form_validation->set_rules('akte', 'Akte', 'required', [
        //     'required' => 'Nominal Wajib di isi'
        // ]);
        // if ($this->form_validation->run() == false) {
        //     $this->load->view('vw_calonsiswa');
        // } else {
        //     $config = array(
        //         'upload_path' => "./uploads/",
        //         'allowed_types' => "gif|jpg|png|jpeg|pdf",
        //         'overwrite' => TRUE,
        //         'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        //     );

        //     $this->load->library('upload', $config);
        //     $this->upload->do_upload('akte');
        //     $this->upload->do_upload('ijazah');
        //     $this->upload->do_upload('kip');
        //     $this->upload->do_upload('pas_foto');
        //     $this->upload->do_upload('kk');
        //     $this->upload->do_upload('pernyataan');

            $data = [
           
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './uploads/';
        $akte = $_FILES['akte']['name'];
        if ($akte) { 
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('akte')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('akte', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $ijazah = $_FILES['ijazah']['name'];
        if ($ijazah) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ijazah')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('ijazah', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $kip = $_FILES['kip']['name'];
        if ($kip) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kip')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('kip', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $pas_foto = $_FILES['pas_foto']['name'];
        if ($pas_foto) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pas_foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('pas_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
      
        $kk = $_FILES['kk']['name'];
        if ($kk) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('kk')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('kk', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $ktp_ayah = $_FILES['ktp_ayah']['name'];
        if ($ktp_ayah) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktp_ayah')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('ktp_ayah', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $ktp_ibu = $_FILES['ktp_ibu']['name'];
        if ($ktp_ibu) {
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('ktp_ibu')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('ktp_ibu', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->dokumen->insert($data,$akte, $ijazah, $kip, $pas_foto,$kk,$ktp_ayah,$ktp_ibu);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Upload Dokumen Berhasil</div>');
            redirect('CalonSiswa/kelengkapandata/DataPersyaratan');
        // }
    }

     function edit_kk($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kk', 'KK', 'required', [
            'required' => 'KK Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_kk", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('kk');

            $data = [

                'kk' => $this->input->post('kk'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah KK Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_akte($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('akte', 'Akte', 'required', [
            'required' => 'Akte Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_akte", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('akte');

            $data = [

                'akte' => $this->input->post('akte'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Akte Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_ijazah($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('ijazah', 'Ijazah', 'required', [
            'required' => 'Ijazah Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_ijazah", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('ijazah');

            $data = [

                'ijazah' => $this->input->post('ijazah'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Ijazah Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_kip($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kip', 'Kip', 'required', [
            'required' => 'Kip Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_kip", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('kip');

            $data = [

                'kip' => $this->input->post('kip'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Kip Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_pas_foto($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pas_foto', 'Pas Foto', 'required', [
            'required' => 'Pas Foto Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_pas_foto", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('pas_foto');

            $data = [

                'pas_foto' => $this->input->post('pas_foto'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Pas Foto Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_ktp_ayah($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('ktp_ayah', 'Ktp Ayah', 'required', [
            'required' => 'KTP Ayah Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_ktp_ayah", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('ktp_ayah');

            $data = [

                'ktp_ayah' => $this->input->post('ktp_ayah'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah KTP Ayah Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
    function edit_ktp_ibu($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['dokumen'] = $this->dokumen->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('ktp_ibu', 'Ktp Ibu', 'required', [
            'required' => 'KTP Ibu Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("calonsiswa/header", $data);
            $this->load->view("calonsiswa/kelengkapan_data/vw_ubah_ktp_ibu", $data);
            $this->load->view('calonsiswa/footer', $data);
        } else {
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('ktp_ibu');

            $data = [

                'ktp_ibu' => $this->input->post('ktp_ibu'),
                'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            $this->dokumen->update(['Id_dokumen' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah KTP Ibu Berhasil!</div>');
            redirect('CalonSiswa/KelengkapanData/dataPersyaratan');
        }
    }
}