<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan_pemesanan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_permintaan_pemesanan');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "permintaan_pemesanan",
			'namafileview' 	=> "V_permintaan_pemesanan",
			'tampil'		=> $this->m_permintaan_pemesanan->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function tambah()
	{
		$this->m_permintaan_pemesanan->tambah();
		redirect('permintaan_pemesanan');
	}
	function hapus($id)
	{
		$this->m_permintaan_pemesanan->hapus($id);
		redirect('permintaan_pemesanan');
	}
	function edit()
	{
		$this->m_permintaan_pemesanan->edit();
		redirect('permintaan_pemesanan');
	}
}
?>