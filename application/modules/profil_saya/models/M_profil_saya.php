<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil_saya extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}
	/*function edit(){
			$id_user					= $this->input->post('id_user');

			$username 					= $this->input->post('name');
			$no_telepon					= $this->input->post('telpon');

			$syarat = array(
				'username'		=>$username,
				'no_telp'		=>$no_telp,
				
			);

		$this->db->where('id_user',$id_user)->update('user', $syarat);

	}



		function edit_password(){
			$id_user					= $this->input->post('id_user');

			$Password_Baru   			= $this->input->post('new-password');

			$syarat = array(
				'password'		=>$Password_Baru,
			);

		$this->db->where('id_user',$id_user)->update('user', $syarat);
}*/
}
?>