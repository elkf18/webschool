<?php

class Dosen_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_dosen')->result_array();
    }

    public function getDosenById($id_dosen)
    {
        return $this->db->get_where('tb_dosen', ['id_dosen' => $id_dosen])->row_array();
    }
}
