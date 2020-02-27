<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PetugasModel', 'petugas');
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $data = [
            'title' => 'Pengaduan | Admin',
            'pageJS' => 'admin/index.js',
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],

            'petugas' => $this->petugas->getAllPetugas(),
            'pengaduan' => $this->pengaduan->joinMasyarakat()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('admin/index')
            ->view('layouts/footer');
    }

}
