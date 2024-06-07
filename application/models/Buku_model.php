<?php

class Buku_model extends CI_model
{
    public function getAllBuku()
    {
        return $this->db->get('tb_buku')->result_array();
    }

    public function tambahDataBuku()
    {
        $kode_buku = $this->input->post('kode_buku', true);
        $judul_buku = $this->input->post('judul_buku', true);
        $pengarang_buku = $this->input->post('pengarang_buku', true);
        $penerbit_buku = $this->input->post('penerbit_buku', true);
        $deskripsi_buku = $this->input->post('deskripsi_buku', true);
        $gambar_buku = $_FILES['gambar_buku']['name'];

        if ($gambar_buku = '') {
        } else {
            $config['upload_path']          = './img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 20000;
            $config['max_height']           = 10240;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_buku')) {
                echo "Gambar gagal diapload!";
            } else {
                $data['gambar_buku'] = $this->upload->data('file_name');
            }
        }
        $data = array(
            'kode_buku'     => $kode_buku,
            'judul_buku'    => $judul_buku,
            'pengarang_buku' => $pengarang_buku,
            'penerbit_buku' => $penerbit_buku,
            'deskripsi_buku' => $deskripsi_buku,
            'gambar_buku'   => $gambar_buku,
        );

        $this->db->insert('tb_buku', $data);
    }

    public function hapusDataBuku($kode_buku)
    {
        $this->db->delete('tb_buku', ['kode_buku' => $kode_buku]);
    }

    public function getBukuById($kode_buku)
    {
        return $this->db->get_where('tb_buku', ['kode_buku' => $kode_buku])->row_array();
    }

    public function ubahDataBuku()
    {
        $data = [
            "kode_buku" => $this->input->post('kode_buku', true),
            "judul_buku" => $this->input->post('judul_buku', true),
            "pengarang_buku" => $this->input->post('pengarang_buku', true),
            "penerbit_buku" => $this->input->post('penerbit_buku', true),
            "deskripsi_buku" => $this->input->post('deskripsi_buku', true),
        ];

        $this->db->where('kode_buku', $this->input->post('kode_buku'));
        $this->db->update('tb_buku', $data);
    }
}
