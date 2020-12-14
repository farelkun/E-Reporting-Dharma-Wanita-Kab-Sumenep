<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __contruct()
    {
        parent::__contruct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => "Username tidak boleh kosong!"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => "Password tidak boleh kosong!"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/auth_header');
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();


        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'kd_user' => $user['kd_user'],
                    'username' => $user['username'],
                    'kd_unitkerja' => $user['kd_unitkerja'],
                    'nama_user' => $user['nama_user'],
                    'email' => $user['email'],
                    'kd_bidang' => $user['kd_bidang']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
            Password Salah!
        </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
            Username Salah!
        </div>');
            redirect('auth');
        }
    }
}
