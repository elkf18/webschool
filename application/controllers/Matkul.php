<?php

class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matkul_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['matkul'] = $this->Matkul_model->getAllMatkul();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('matkul/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mata Kuliah';

        $this->form_validation->set_rules('id_matkul', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama_matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('kode_matkul', 'Kode', 'required');
        $this->form_validation->set_rules('sks_matkul', 'SKS', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('matkul/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Matkul_model->tambahDataMatkul();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('matkul');
        }
    }

    public function hapus($id_matkul)
    {
        $this->Matkul_model->hapusDataMatkul($id_matkul);
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('matkul');
    }

    public function ubah($id_matkul)
    {
        $data['judul'] = 'Form Ubah Data Mata Kuliah';
        $data['matkul'] = $this->Matkul_model->getMatkulById($id_matkul);

        $this->form_validation->set_rules('id_matkul', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama_matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('kode_matkul', 'Kode', 'required');
        $this->form_validation->set_rules('sks_matkul', 'SKS', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('matkul/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Matkul_model->ubahDataMatkul();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('matkul');
        }
    }
    function MatkulSearch($nama_matkul)
    {
        $this->db->like($this->primary, $nama_matkul);
        $this->db->or_like("mata kuliah", $nama_matkul);
        $this->db->limit(10);
        return $this->db->get($this->table);
    }

}
