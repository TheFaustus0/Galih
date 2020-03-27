<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_Pesan_pemilik');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Pesan_pemilik",
			'namafileview' 	=> "V_Pesan_pemilik",
			'tampil'		=> $this->m_Pesan_pemilik ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}

	function pesan()
	{
		$this->m_pesan_pemilik->pesan();
	}

	function balas()
	{
		$this->m_pesan_pemilik->balas();
	}

	function hapus()
	{
		$this->m_pesan_pemilik->hapus();
	}

}
?>
