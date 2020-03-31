<?php

function flashAlert($type, $text)
{
    $ci = get_instance();
    $ci->session->set_flashdata('type', $type);
    $ci->session->set_flashdata('text', $text);
}
