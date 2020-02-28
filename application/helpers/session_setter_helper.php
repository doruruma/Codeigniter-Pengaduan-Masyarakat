<?php

function setSession($id, $username, $level)
{
    $ci = get_instance();
    $session = [
        'id' => $id,
        'username' => $username,
        'level' => $level
    ];
    $ci->session->set_userdata($session);
}
