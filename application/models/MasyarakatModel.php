<?php

class MasyarakatModel extends CI_Model
{

	public function getAllMasyarakat()
	{ 
		return $this->db->get('masyarakat')->result();
	}

}
