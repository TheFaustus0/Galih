<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_tentang')->result();
	}

	function edit()
	{
		$id_tentang = $this->input->post('id_tentang');

		$judul 		= $this->input->post('judul');
		$konten	 	= $this->input->post('konten');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/patner/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
            $this->upload->do_upload('gambar');
            {
			
				$gbr = $this->upload->data();
				$data = array(
					'judul'				=> $judul,
					'konten'			=> $konten,
					'gambar' 			=> $gbr['file_name'],
					
				);
				$this->db->where('id_tentang',$id_tentang)->update('t_tentang', $data);
			
	}
	}

	function hapus($id_tentang)
	{
		$this->db->where('id_tentang', $id_tentang)->delete('t_tentang');
	}
}
?>