<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_syarat_ketentuan extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_syarat_ketentuan')->result();
	}

	function edit()
	{
		$id_syarat_ketentuan = $this->input->post('id_syarat_ketentuan');

		$judul 		= $this->input->post('judul');
		// $sub_judul  = $this->input->post('sub_judul');
		$konten	 	= $this->input->post('konten');
		// $sub_konten = $this->input->post('sub_konten');


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
					'sub_judul'			=> $sub_judul,
					'konten'			=> $konten,
					'sub_konten'		=> $sub_konten,
					'gambar' 			=> $gbr['file_name'],
					
				);
				$this->db->where('id_syarat_ketentuan',$id_syarat_ketentuan)->update('t_syarat_ketentuan', $data);
			
	}
	}

	function hapus($id_syarat_ketentuan)
	{
		$this->db->where('id_syarat_ketentuan', $id_syarat_ketentuan)->delete('t_syarat_ketentuan');
	}
}
?>