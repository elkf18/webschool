<?php
class Auth_model extends CI_Model
{
    public function cek_login()
    {
        $email = set_value('email');
        $password = set_value('password');

        $result = $this->db->where('email', $email)
            ->where('password', $password)
            ->get('tb_admin');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
