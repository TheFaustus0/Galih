 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_pemilik extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}

}