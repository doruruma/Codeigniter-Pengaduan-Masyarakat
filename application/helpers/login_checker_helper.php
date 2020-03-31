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

function loggedInPublic()
{
    $ci = get_instance();
    if (isset($ci->session->user['nik'])) {
        redirect('public/home');
    }
}

function loggedInAdmin()
{
    $ci = get_instance();
    if (isset($ci->session->user['level'])) {
        redirect('admin/dashboard');
    }
}
