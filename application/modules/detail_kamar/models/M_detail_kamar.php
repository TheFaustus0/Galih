<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_kamar extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_pemesanan')->result();
	}
	function input_tambah_kamar(){


		//input data kost
		$tanggal = $this->input->post('tanggal');
		$durasi= $this->input->post('durasi_sewa');
		$jenis_kelamin=$this->input->post('jenis');
		$gbr=$this->input->post('gambar');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_ktp';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		$this->upload->do_upload('gambar');
				$gbr = $this->upload->data();
		
		$detail_kamar = array( 'tgl_masuk' =>$tanggal,
						'durasi_sewa'=>$durasi,
						'jenis_kelamin'=>$jenis_kelamin,

					   'foto_ktp' 			=> $gbr['file_name'],

						);
		
		
		$this->db->insert('t_pemesanan',$detail_kamar);
}


}