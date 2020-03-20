<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar_saya extends CI_Model {

	function tampil()
			{
		 $this->db->select('*');
		 $this->db->from('t_lantai');
		 $this->db->join('t_kamar','t_kamar.id_kamar=t_lantai.id_kamar');
		 $this->db->join('foto_kamar','foto_kamar.id_foto_kamar=t_lantai.id_foto_kamar');
		 $this->db->join('fasilitas_kamar','fasilitas_kamar.id_fasilitas_kamar=t_lantai.id_fasilitas_kamar');
		 $this->db->join('t_kost', 't_kost.id_kost=t_lantai.id_kost');
		 $query = $this->db->get();
		 return $query->result();
		 
	}
	function hapus($id_kamar)
	{
		$this->db->where('id_kamar', $id_kamar)->delete('t_kamar');
}
}