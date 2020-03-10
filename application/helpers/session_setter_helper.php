<?php

function setSession($data)
{
    $ci = get_instance();
    $session = [
        'user' => $data
    ];
    $ci->session->set_userdata($session);
}
