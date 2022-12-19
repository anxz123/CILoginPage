<?php

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('auth_header');
        $this->load->view('view_login');
        $this->load->view('auth_footer');
    }
    public function Registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registraton';
            $this->load->view('auth_header', $data);
            $this->load->view('registration');
            $this->load->view('auth_footer');
        } else {
            echo 'data berhasil ditambahkan';
        }
    }
}
