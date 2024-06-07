<?php
class Garfik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gra');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Grafik_model->graph();
        $this->load->view('grafik', $data);
    }
}
