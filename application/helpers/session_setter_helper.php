<?php

function setSessionPetugas($data)
{
    $ci = get_instance();
    $session = [
        'user' => [
            'id' => $data->id,
            'username' => $data->username,
            'level' => $data->level
        ]
    ];
    $ci->session->set_userdata($session);
}

function setSessionMasyarakat($data)
{
    $ci = get_instance();
    $session = [
        'user' => [
            'id' => $data->id,
            'nik' => $data->nik,
            'nama' => $data->nama,
            'username' => $data->username,
        ]
    ];
    $ci->session->set_userdata($session);
}
