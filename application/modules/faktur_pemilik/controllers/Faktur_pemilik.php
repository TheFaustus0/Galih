<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_faktur_pemilik');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faktur_pemilik",
			'namafileview' 	=> "V_faktur_pemilik",
			'tampil'		=> $this->m_faktur_pemilik ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
}
