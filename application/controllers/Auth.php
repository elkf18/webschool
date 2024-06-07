<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required'  => 'Email Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required'  => 'Password Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form/login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->Auth_model->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', 'Gagal');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                redirect('dashboard/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
