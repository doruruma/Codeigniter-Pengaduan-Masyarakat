<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loggedIn();
        $this->load->model('AuthModel', 'auth');
    }

    public function index()
    {
        $this->auth->validation();
        if ($this->form_validation->run()) {
            $this->auth->login();
        } else {
            $data = [
                'title' => 'E-report | Sign In Petugas',
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/login')
                ->view('layouts/footer');
        }
    }
    
    public function registerMasyarakat()
    {
        $this->AuthModel->registerMasyarakatValidation();
        if ($this->form_validation->run()) {
            $this->AuthModel->registerMasyarakat();
        } else {
            $data = [
                'title' => 'E-report | Register Masyarakat'
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/registerMasyarakat')
                ->view('layouts/footer');
        }
    }

}
