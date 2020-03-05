<?php

class Masyarakat extends CI_Controller
{

    public function __construct()
    { 
        parent::__construct();
    }

    public function index()
    {
        echo 'andra yuusha';
        var_dump($this->session->userdata('user'));
    }

}
