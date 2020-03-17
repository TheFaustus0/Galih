 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_dashboard extends CI_Model {

	function tampil()
	{
		return $this->db->get('syarat_ketentuan')->result();
	}

}