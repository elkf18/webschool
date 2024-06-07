<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('format');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Buku_model->getAllBuku();

        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Buku';

        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required|numeric');
        $this->form_validation->set_rules('judul_buku', 'Judul', 'required');
        $this->form_validation->set_rules('pengarang_buku', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit_buku', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi_buku', 'Deskripsi', 'required');
        $this->form_validation->set_rules('gambar_buku', 'Gambar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('buku/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Buku_model->tambahDataBuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('buku');
        }
    }

    public function hapus($kode_buku)
    {
        $this->Buku_model->hapusDataBuku($kode_buku);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('buku');
    }

    public function detail($kode_buku)
    {
        $data['judul'] = 'Detail Data Buku';
        $data['buku'] = $this->Buku_model->getBukuById($kode_buku);
        $this->load->view('templates/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($kode_buku)
    {
        $data['judul'] = 'Form Ubah Data Buku';
        $data['buku'] = $this->Buku_model->getBukuById($kode_buku);

        $this->form_validation->set_rules('judul_buku', 'Judul', 'required');
        $this->form_validation->set_rules('pengarang_buku', 'Pengarang ', 'required');
        $this->form_validation->set_rules('penerbit_buku', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi_buku', 'Deskripsi', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('buku/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Buku_model->ubahDataBuku();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('buku');
        }
    }
}
