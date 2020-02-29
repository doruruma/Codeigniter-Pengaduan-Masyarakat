<?php

function setSessionPetugas($id, $username, $level)
{
    $ci = get_instance();
    $session = [
        'id' => $id,
        'username' => $username,
        'level' => $level
    ];
    $ci->session->set_userdata($session);
}

function setSessionMasyarakat($id, $nik, $nama, $username)
{
    $ci = get_instance();
    $session = [
        'id' => $id,
        'nik' => $nik,
        'nama' => $nama,
        'username' => $username,
    ];
    $ci->session->set_userdata($session);
}
