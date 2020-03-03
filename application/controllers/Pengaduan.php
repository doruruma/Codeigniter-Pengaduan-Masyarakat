<?php

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin('admin');
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Daftar Pengaduan',
            'pageJS' => 'pengaduan/index.js',
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],

            'pengaduan' => $this->pengaduan->getAllPengaduan()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('pengaduan/index')
            ->view('layouts/footer');
    }

}
