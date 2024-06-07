<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalmk_model extends CI_Model
{

    private $tmp   = "tmp";


    function getTmp()
    {
        return $this->db->get("tmp");
    }

    function cekTmp($kode)
    {
        $this->db->where("kode_matkul", $kode);
        return $this->db->get("tmp");
    }

    function InsertTmp($data)
    {
        $this->db->insert($this->tmp, $data);
    }


    function jumlahTmp()
    {
        return $this->db->count_all("tmp");
    }

    function deleteTmp($kode_matkul)
    {
        $this->db->where("kode_matkul", $kode_matkul);
        $this->db->delete($this->tmp);
    }

    
}

/* End of file Mod_peminjaman.php */
