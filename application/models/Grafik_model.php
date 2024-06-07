<?php
// Penduduk.php
class Grafik_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function graph()
    {
        $data = $this->db->query("SELECT * from tb_mhs");
        return $data->result();
    }
}
