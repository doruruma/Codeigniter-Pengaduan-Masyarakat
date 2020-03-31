<?php

class Masyarakat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLoginAdmin();
        $this->load->model('MasyarakatModel', 'masyarakat');
    }

    public function index()
    {
        $data = [
            'title' => 'E-report | Data Masyarakat',
            'pluginJS' => ['datatables/jquery.dataTables.js', 'datatables/dataTables.bootstrap4.min.js'],
            'pluginCSS' => ['datatables/dataTables.bootstrap4.min.css'],

            'masyarakat' => $this->masyarakat->getAllMasyarakat()
        ];
        $this->load->view('layouts/header', $data)
            ->view('layouts/nav')
            ->view('layouts/sidebar')
            ->view('masyarakat/index')
            ->view('layouts/footer');
    }
    
}
