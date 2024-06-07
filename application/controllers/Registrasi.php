<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required'  => 'Email Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required'  => 'Username Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required'  => 'Password Wajib Diisi!',
            'matches'   => 'Password Tidak Sama'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', [
            'required'  => 'Password Wajib Diisi!',
            'matches'   => 'Password Tidak Sama'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form/registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id_admin'  => '',
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
            );

            $this->db->insert('tb_admin', $data);
            redirect('auth/login');
        }
    }
}
