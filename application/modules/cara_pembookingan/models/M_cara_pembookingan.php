<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cara_pembookingan extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}
	
}
