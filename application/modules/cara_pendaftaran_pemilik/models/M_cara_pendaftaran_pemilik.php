<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_cara_pendaftaran_pemilik extends CI_Model {

	function tampil()
	{
		return $this->db->get('cara_pendaftaran')->result();
	}
	
}
