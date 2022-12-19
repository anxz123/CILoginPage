<?php
class Home extends CI_Controller{
    public function index()
    {
        return $this->load->view('formview');
        echo 'rumah ku';
    }
    public function tampil()
    {
        return $this->load->view('home');
    
    }
    public function form()
    {
    return $this->load->view('formview');

    }
}