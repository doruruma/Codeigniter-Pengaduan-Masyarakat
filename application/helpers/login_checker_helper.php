<?php

function isLogin($session)
{
    $ci = get_instance();
    if (!$ci->session->userdata($session)) {
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
