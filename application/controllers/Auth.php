<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }
        $this->load->view('auth/login');
    }

    public function login()
    {
        if ($this->input->method() !== 'post') {
            redirect('auth');
        }

        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->Auth_model->login($username, $password);

        if ($user) {
            $sess_data = array(
                'logged_in' => TRUE,
                'id'        => $user->id,
                'username'  => $user->username,
                'role'      => $user->role,
            );
            $this->session->set_userdata($sess_data);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
