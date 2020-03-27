<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_pencari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_pembayaran_pencari');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pembayaran_pencari",
			'namafileview' 	=> "V_pembayaran_pencari",
			'tampil'		=> $this->m_pembayaran_pencari ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pencari', $data);
	}
}
