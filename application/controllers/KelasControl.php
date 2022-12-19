<?php


defined('BASEPATH') or exit('No direct script access allowed');

class KelasControl extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel');
    }


    public function index()
    {
        $data['isi'] = $this->KelasModel->getdb();
        $this->load->view('KelasView', $data);
    }
    public function tambah()
    {
        return  $this->load->view('KelasTambah');
    }
    public function prosestambah()
    {
        $fakultas = $this->input->POST("txtfakultas");
        $prodi = $this->input->POST("txtprodi");
        $kelas = $this->input->POST("txtkelas");
        $isi = $this->input->POST("txtisi");

        $data_input = [
            'fakultas' => $fakultas,
            'prodi' => $prodi,
            'kelas' => $kelas,
            'isi' => $isi
        ];
        $simpan = $this->KelasModel->add($data_input);
        redirect('KelasControl/index');
    }
    public function hapus($id)
    {
        $this->KelasModel->delete($id);
        redirect('KelasControl/index');
    }
    public function edit($id)
    {
        $data['isi'] = $this->KelasModel->getOne($id);
        return $this->load->view('KelasEdit', $data);
    }
    public function proses_edit()
    {
        $id = $this->input->POST("txtid");
        $fakultas = $this->input->POST("txtfakultas");
        $prodi = $this->input->POST("txtprodi");
        $kelas = $this->input->POST("txtkelas");
        $isi = $this->input->POST("txtisi");

        $data_edit = [
            'fakultas' => $fakultas,
            'prodi' => $prodi,
            'kelas' => $kelas,
            'isi' => $isi
        ];
        $this->KelasModel->editData($id, $data_edit);
        redirect('KelasControl/index');
    }
    public function home()
    {
        return  $this->load->view('kelasHome');
    }
}
