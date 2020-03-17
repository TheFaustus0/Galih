<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_index extends CI_Model {

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

/*	function tambah()
	{
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('sekolah', $data);
			}
	}

	function edit()
	{
		$id_sekolah = $this->input->post('id_sekolah');
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}*/
}