<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_kamar')->result();
	}

	
}
 ?>