<?php

class Ditanggapi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginAdmin();
        $this->load->model('DitanggapiModel', 'ditanggapi');
        $this->load->model('PengaduanModel', 'pengaduan');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Pengaduan Ditanggapi',
            'pageJS' => 'ditanggapi/index.js',
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],

            'ditanggapi' => $this->ditanggapi->getAllTanggapan()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('ditanggapi/index')
            ->view('layouts/footer');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'E-report | Pengaduan Ditanggapi',
            'pageJS' => 'pengaduan/detail.js',

            'ditanggapi' => $this->ditanggapi->getTanggapan($id),
            'img' => $this->pengaduan->getPengaduanImg($id)
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('ditanggapi/detail')
            ->view('layouts/footer');
    }
}
