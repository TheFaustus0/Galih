<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_pencari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_faktur_pencari');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "faktur_pencari",
			'namafileview' 	=> "V_faktur_pencari",
			'tampil'		=> $this->m_faktur_pencari ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pencari', $data);
	}
}
