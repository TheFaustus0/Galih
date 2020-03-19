<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak_rajakost extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_kontak')->result();
	}
	function input_pesan(){


		//kontak
        /*$id_kontak = $this->input->post('id_kontak');*/

		$pembahasan = $this->input->post('pembahasan');
		$pesan = $this->input->post('pesan');

		$kontak = array(
							'pembahasan' =>$pembahasan,
							'pesan'=>$pesan,
						);
		
		
		$this->db->insert('t_kontak',$kontak);
	}
}
