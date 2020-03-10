<?php


function isLoginAdmin()
{
    $ci = get_instance();
    if (!isset($ci->session->user['level'])) {
        redirect('admin/auth');
    }
}

function isLoginPublic()
{
    $ci = get_instance();
    if (!isset($ci->session->user['nik'])) {
        redirect('auth/login');
    }
}

function loggedIn($redirect)
{
    $ci = get_instance();
    if ($ci->session->user) {
        redirect($redirect);
    }
}
