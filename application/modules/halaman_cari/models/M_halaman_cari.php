<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_cari extends CI_Model {

	function tampil()
	{
		 $this->db->select('*');
		 $this->db->from('t_kost');
		 $this->db->join('foto_kost','foto_kost.id_foto_kost=t_kost.id_foto_kost');
		 $this->db->join('fasilitas_kost','fasilitas_kost.id_fasilitas_kost=t_kost.id_fasilitas_kost');
		 $this->db->join('t_rumah_makan','t_rumah_makan.id_rumah_makan=t_kost.id_rumah_makan');
		 $this->db->join('t_rumah_sakit','t_rumah_sakit.id_rumah_sakit=t_kost.id_rumah_sakit');
		 $this->db->join('t_sekolah','t_sekolah.id_sekolah=t_kost.id_sekolah');
		 $this->db->join('t_super_market','t_super_market.id_super_market=t_kost.id_super_market');
		 $query = $this->db->get();
		 return $query->result();
	}


}