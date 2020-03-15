<?php

class AdminModel extends CI_Model
{

    public function getAdmin($id)
    {
        return $this->db->select('petugas.*, level.*')->from('petugas')->where('petugas.id', $id)
            ->join('level', 'petugas.id_level = level.id')->get()->row();
    }

}
