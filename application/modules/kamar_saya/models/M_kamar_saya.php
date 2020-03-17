<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar_saya extends CI_Model {

	function tampil()
	{
		 $this->db->select('*');
		 $this->db->from('t_kamar');
		 $this->db->join('foto_kamar','foto_kamar.id_foto_kamar=t_kamar.id_foto_kamar');
		 $this->db->join('fasilitas_kamar','fasilitas_kamar.id_fasilitas_kamar=t_kamar.id_fasilitas_kamar');
		 $query = $this->db->get();
		 return $query->result();
	}

	
}
 ?>