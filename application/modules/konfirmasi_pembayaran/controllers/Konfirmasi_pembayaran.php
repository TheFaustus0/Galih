<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_konfirmasi_pembayaran');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi_pembayaran",
			'namafileview' 	=> "V_konfirmasi_pembayaran",
			'tampil'		=> $this->m_konfirmasi_pembayaran ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pencari', $data);
	}
}
