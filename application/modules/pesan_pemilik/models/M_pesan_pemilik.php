<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan_pemilik extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}

	function pesan()
	{
		$isipesan		= $this->input->post('isi_pesan');
		$pesan = array(
			'isi_pesan' 	=> $isipesan,
		
		 );
		$this->db->insert('t_pesan',$pesan);

	}
	function balas()
		{
			$isibalas		= $this->input->post('balas');
			$balas = array(
				'isi_balas' 	=> $isibalas,
			
			 );
			$this->db->insert('t_pesan',$balas);
	
			}

	function hapus()
	{
		$this->db->where('id_pesan', $id)->delete('t_pesan');
	}
	
}
?>
