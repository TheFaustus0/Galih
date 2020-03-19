<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_komentar_pemilik');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "komentar_pemilik",
			'namafileview' 	=> "V_komentar_pemilik",
			'tampil'		=> $this->m_komentar_pemilik ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
}
