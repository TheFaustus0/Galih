 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_pencari extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}
	function input_pemilik(){

	}
	function input_pencari(){

	}

}