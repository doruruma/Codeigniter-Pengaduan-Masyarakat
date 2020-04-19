<?php

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginAdmin();
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

    public function detail($id)
    {
        $data = [
            'title' => 'E-report | Daftar Pengaduan',
            'pageJS' => 'pengaduan/detail.js',

            'pengaduan' => $this->pengaduan->getPengaduan($id),
            'img' => $this->pengaduan->getPengaduanImg($id)
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('pengaduan/detail')
            ->view('layouts/footer');
    }
}
