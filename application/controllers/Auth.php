<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function index()
    {
        $this->AuthModel->registerPetugasValidation();
        if ($this->form_validation->run()) { 
            $this->AuthModel->registerPetugas();
        } else {
            $data = [
                'title' => 'Pengaduan | Register Petugas'
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/registerPetugas')
                ->view('layouts/footer');
        }
    }

}
