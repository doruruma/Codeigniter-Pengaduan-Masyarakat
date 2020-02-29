<?php

function isLogin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id')) {
        redirect('auth');
    }
}

function loggedIn()
{
    $ci = get_instance();
    $sessionLEVEL = $ci->session->userdata('level');
    $sessionNIK = $ci->session->userdata('nik');
    if ($sessionNIK) {
        redirect('masyarakat');
    } else if ($sessionLEVEL) {
        redirect('admin');
    }
}
