<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
{
    parent::__construct();

    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->load->model('Dashboard_model');
}

    public function index()
    {
        $data['users']    = $this->Dashboard_model->get_all_users();
        $data['biodata']  = $this->Dashboard_model->get_all_biodata();
        $data['username'] = $this->session->userdata('username');
        $data['role']     = $this->session->userdata('role');

        $this->load->view('dashboard/index', $data);
    }
}