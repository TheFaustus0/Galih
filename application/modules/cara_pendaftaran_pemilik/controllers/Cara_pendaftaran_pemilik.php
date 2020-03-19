<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_pendaftaran_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_cara_pendaftaran_pemilik');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_pendaftaran_pemilik",
			'namafileview' 	=> "V_cara_pendaftaran_pemilik",
			'tampil'		=> $this->m_cara_pendaftaran_pemilik ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
}
