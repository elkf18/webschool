<?php

class Dosen extends CI_Controller
{
    public function index()
    {
        $data['dosen'] = $this->Dosen_model->tampil_data();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dosen/dosen_view', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_dosen)
    {
        $data['detail'] = $this->Dosen_model->getDosenById($id_dosen);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dosen/dosen_view', $data);
        $this->load->view('templates/footer');
    }
}
