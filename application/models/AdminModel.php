<?php

class AdminModel extends CI_Model
{ 

    public function getAdmin($id)
    {
        return $this->db->get_where('petugas', ['id' => $id])->row();
    }

}
