<?php

function isLogin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('user')) {
        redirect('auth');
    }
}

function loggedIn()
{
    $ci = get_instance();
    $sessionLEVEL = $ci->session->userdata('user')['level'];
    $sessionNIK = $ci->session->userdata('user')['nik'];
    if ($sessionNIK) {
        redirect('masyarakat');
    } else if ($sessionLEVEL) {
        redirect('admin');
    }
}
