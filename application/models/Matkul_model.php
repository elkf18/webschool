<?php

class Matkul_model extends CI_model
{
    public function getAllMatkul()
    {
        return $this->db->get('tb_matkul')->result_array();
    }

    public function tambahDataMatkul()
    {
        $id_matkul = $this->input->post('id_matkul', true);
        $nama_matkul = $this->input->post('nama_matkul', true);
        $kode_matkul = $this->input->post('kode_matkul', true);
        $sks_matkul = $this->input->post('sks_matkul', true);

        $data = array(
            'id_matkul'        => $id_matkul,
            'nama_matkul'      => $nama_matkul,
            'kode_matkul'      => $kode_matkul,
            'sks_matkul'       => $sks_matkul,

        );

        $this->db->insert('tb_matkul', $data);
    }

    public function hapusDataMatkul($id_matkul)
    {
        $this->db->delete('tb_matkul', ['id_matkul' => $id_matkul]);
    }

    public function getMatkulById($id_matkul)
    {
        return $this->db->get_where('tb_matkul', ['id_matkul' => $id_matkul])->row_array();
    }

    public function ubahDataMatkul()
    {
        $data = [
            "id_matkul"            => $this->input->post('id_matkul', true),
            "nama_matkul"           => $this->input->post('nama_matkul', true),
            "kode_matkul"          => $this->input->post('kode_matkul', true),
            "sks_matkul"         => $this->input->post('sks_matkul', true),
        ];

        $this->db->where('id_matkul', $this->input->post('id_matkul'));
        $this->db->update('tb_matkul', $data);
    }
    function searchBuku($cari, $limit, $offset)
    {
        $this->db->like($this->primary, $cari);
        $this->db->or_like("judul", $cari);
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table);
    }
    function cekMatkul($kode)
    {
        $this->db->where("kode_matkul", $kode);
        return $this->db->get("matkul");
    }
    function MatkulSearch($nama_matkul)
    {
        $this->db->like($this->primary, $nama_matkul);
        $this->db->or_like("Nama matkul", $nama_matkul);
        $this->db->limit(10);
        return $this->db->get($this->table);
    }

    
    
}
