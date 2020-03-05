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
        $this->auth->registerMasyarakatValidation();
        if ($this->form_validation->run()) {
            $this->auth->register();
        } else {
            $data = [
                'title' => 'E-report | Registrasi'
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/register')
                ->view('layouts/footer');
        }
    }

    public function login()
    {
        $this->auth->validation();
        if ($this->form_validation->run()) {
            $this->auth->login('masyarakat');
        } else {
            $data = [
                'title' => 'E-report | Sign In Pengguna'
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/login')
                ->view('layouts/footer');
        }
    }

    public function admin()
    {
        $this->auth->validation();
        if ($this->form_validation->run()) {
            $this->auth->login('admin');
        } else {
            $data = [
                'title' => 'E-report | Sign In Petugas',
            ];
            $this->load->view('layouts/header', $data)
                ->view('auth/admin')
                ->view('layouts/footer');
        }
    }

}
