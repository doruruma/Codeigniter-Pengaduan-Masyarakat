<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('PetugasModel', 'petugas');
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Admin',
            'pageJS' => 'admin/index.js',
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],

            'petugas' => $this->petugas->getAllPetugas(),
            'pengaduan' => $this->pengaduan->getAllPengaduan()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('admin/index')
            ->view('layouts/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('auth');
    }
}
