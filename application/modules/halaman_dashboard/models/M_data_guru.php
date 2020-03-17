<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_guru extends CI_Model {

	function tampil()
	{
		return $this->db->get('fasilitas_kost')->result();
	}
}
?>