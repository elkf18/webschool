<?php

class Mhs_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mhs')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $id_mhs = $this->input->post('id_mhs', true);
        $nim_mhs = $this->input->post('nim_mhs', true);
        $nama_mhs = $this->input->post('nama_mhs', true);
        $email_mhs = $this->input->post('email_mhs', true);
        $tgl_mhs = $this->input->post('tgl_mhs', true);
        $agama_mhs = $this->input->post('agama_mhs', true);
        $kelas_mhs = $this->input->post('kelas_mhs', true);
        $alamat_mhs = $this->input->post('alamat_mhs', true);
        $foto_mhs = $this->input->post('foto_mhs', true);


        $data = array(
            'id_mhs'          => $id_mhs,
            'nim_mhs'        => $nim_mhs,
            'nama_mhs'      => $nama_mhs,
            'email_mhs'       => $email_mhs,
            'tgl_mhs'        => $tgl_mhs,
            'agama_mhs'          => $agama_mhs,
            'kelas_mhs'        => $kelas_mhs,
            'alamat_mhs'       => $alamat_mhs,
            'foto_mhs'        => $foto_mhs,

        );
        if (!empty($_FILES['foto_mhs']['name'])) {
            $foto_mhs = $this->_do_upload();
            $data['foto_mhs'] = $foto_mhs;
        }



        $this->db->insert('tb_mhs', $data);
    }

    public function hapusDataMahasiswa($id_mhs)
    {
        $this->db->delete('tb_mhs', ['id_mhs' => $id_mhs]);
    }

    public function getMahasiswaById($id_mhs)
    {
        return $this->db->get_where('tb_mhs', ['id_mhs' => $id_mhs])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "id_mhs"            => $this->input->post('id_mhs', true),
            "nim_mhs"           => $this->input->post('nim_mhs', true),
            "nama_mhs"          => $this->input->post('nama_mhs', true),
            "email_mhs"         => $this->input->post('email_mhs', true),
            "tgl_mhs"           => $this->input->post('tgl_mhs', true),
            "agama_mhs"         => $this->input->post('agama_mhs', true),
            "kelas_mhs"         => $this->input->post('kelas_mhs', true),
            "alamat_mhs"        => $this->input->post('alamat_mhs', true),
            "foto_mhs"          => $this->input->post('foto_mhs', true),
        ];

        // if (!empty($_FILES['foto_admin']['name'])) {
        //     $foto_admin = $this->_do_upload();

        //     $upload =$this->Admin_model->get_by_id($id_admin);
        //     if (file_exists('assets/upload/images/' . $upload['foto_admin']) && $upload['foto_admin']) {
        //         unlink('assets/upload/images/' . $upload['foto_admin']);
        //     }

        //     $data['foto_admin'] = $foto_admin;
        // }
        // if (!$this->upload->do_upload('filecover')) {
        //     $gambar = "";
        // }

        $this->db->where('id_mhs', $this->input->post('id_mhs'));
        $this->db->update('tb_mhs', $data);
    }
    private function _do_upload()
    {
        $foto_mhs = time() . '-' . $_FILES["foto_mhs"]['name'];

        $config['upload_path']          = 'assets/upload/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_widht']            = 1000;
        $config['max_height']           = 1000;
        $config['file_name']            = $foto_mhs;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_mhs')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('');
        }
        return $this->upload->data('file_name');
    }
    
 
}
