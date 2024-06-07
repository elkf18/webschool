<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalKuliah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Jadwalmk_model',  'Matkul_model'));
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('jadwalkuliah/index', $data);
        $this->load->view('templates/footer');
    }


    public function tampil_tmp()
    {
        $data['tmp']       = $this->Jadwalmk_model->getTmp()->result();
        $data['jumlahTmp'] = $this->Jadwalmk_model->jumlahTmp();
        $this->load->view('jadwalkuliah/matkul_tampil_tmp', $data);
    }

    
    public function cari_matkul()
    {
        $carimatkul = $this->input->post('carimatkul');
        $data['matkul'] = $this->Matkul_model->MatkulSearch($carimatkul);
        $this->load->view('jadwalkuliah/matkul_carimatkul', $data);
        
    }

    public function cari_kode_matkul()
    {
        $kode_matkul = $this->input->post('kode_matkul');
        $hasil = $this->Matkul_model->cekMatkul($kode_matkul);
        if ($hasil->num_rows() > 0) {
            $dmatkul = $hasil->row_array();
            echo $dmatkul['nama_matkul'] . "|" . $dmatkul['sks_matkul'];
        }
    }

    public function save_tmp()
    {
        $kode_matkul = $this->input->post('kode_matkul');
        $cek = $this->Jadwalmk_model->cekTmp($kode_matkul);
        //cek apakah data masih kosong di tabel tmp
        if ($cek->num_rows() < 1) {
            $data = array(
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul'     => $this->input->post('nama_matkul'),
                'sks_matkul' => $this->input->post('sks_matkul')
            );
            $this->Jadwalmk_model->InsertTmp($data);
        }

        //}


    }

    public function hapus_tmp()
    {
        $kode_matkul = $this->input->post('kode_matkul');
        $this->Jadwalmk_model->deleteTmp($kode_matkul);
    }

    
}

/* End of file Peminjaman.php */
