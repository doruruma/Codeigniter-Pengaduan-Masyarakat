<?php

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PetugasModel', 'petugas');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Petugas',
            'pageJS' => 'petugas/index.js',
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],

            'petugas' => $this->petugas->getAllPetugas()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('petugas/index')
            ->view('layouts/footer');
    }

    public function tambah()
    {
        $this->petugas->validation();
        if ($this->form_validation->run()) {
            $this->petugas->register();
        } else {
            $data = [
                'title' => 'E-report | Tambah Petugas',
                'pluginCSS' => [],
                'pluginJS' => []
            ];
            $this->load->view('layouts/header', $data)
                ->view('layouts/nav')
                ->view('layouts/sidebar')
                ->view('petugas/tambah')
                ->view('layouts/footer');
        }
    }
    
}
