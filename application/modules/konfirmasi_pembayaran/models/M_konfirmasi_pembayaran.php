<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konfirmasi_pembayaran extends CI_Model {

	function tampil()
	{
		return $this->db->get('konfirmasi_pembayaran')->result();
		
		$this->db->select('*');
		$this->db->from('konfirmasi_pembayaran');
		$this->db->join('t_login','t_login.id_user=konfirmasi_pembayaran.id_user');
		$this->db->join('t_pemesanan','t_pemesanana.id_pemesanan=konfirmasi_pembayaran.id_pemesanan');
		$this->db->join('t_bank','t_bank.id_bank=konfirmasi_pembayaran.id_bank');
		$query = $this->db->get();
		return $query->result();
	}
	function tambah()
	{
		$keterangan		= $this->input->post('keterangan');
		$email			= $this->input->post('email');
		$no_faktur		= $this->input->post('no_faktur');
		$tgl_pembayaran = $this->input->post('tgl_pembayaran');
		$bank_ke		= $this->input->post('bank_ke');
		
		$data = array(
			'keterangan'		=> $keterangan,
			'email'				=> $email,
			'no_faktur'			=> $no_faktur,
			'tgl_pembayaran'	=> $tgl_pembayaran,
			'bank_ke'			=> $bank_ke,
			'logo' 				=> 'kosong1.png',
		);
		$this->db->insert('konfirmasi_pembayaran', $data);

		//foto_bukti
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/foto_ktp';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
				// $gbr = $this->upload->data();
				$gambar = $this->upload->data();
				$foto = array(
					'foto' 				=> $gambar['file_name'],
				);
				$this->db->insert('konfirmasi_pembayaran', $data);
}
}
