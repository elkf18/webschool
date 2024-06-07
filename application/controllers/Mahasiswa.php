<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mhs_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mhs_model->getAllMahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('id_mhs', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nim_mhs', 'NIM', 'required');
        $this->form_validation->set_rules('nama_mhs', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email_mhs', 'Email', 'required');
        $this->form_validation->set_rules('tgl_mhs', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama_mhs', 'Agama', 'required');
        $this->form_validation->set_rules('kelas_mhs', 'Kelas', 'required');
        $this->form_validation->set_rules('alamat_mhs', 'Alamat', 'required');
        $this->form_validation->set_rules('foto_mhs', 'Foto', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mhs_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('mahasiswa');
        }
    }

    public function hapus($id_mhs)
    {
        $this->Mhs_model->hapusDataMahasiswa($id_mhs);
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('mahasiswa');
    }

    public function ubah($id_mhs)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mhs_model->getMahasiswaById($id_mhs);

        $this->form_validation->set_rules('id_mhs', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nim_mhs', 'NIM', 'required');
        $this->form_validation->set_rules('nama_mhs', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email_mhs', 'Email', 'required');
        $this->form_validation->set_rules('tgl_mhs', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama_mhs', 'Agama', 'required');
        $this->form_validation->set_rules('kelas_mhs', 'Kelas', 'required');
        $this->form_validation->set_rules('alamat_mhs', 'Alamat', 'required');
        $this->form_validation->set_rules('foto_mhs', 'Foto', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mhs_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('mahasiswa');
        }
    }
    
}
