<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking_pencari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_boking_pencari');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "boking_pencari",
			'namafileview' 	=> "V_boking_pencari",
			'tampil'		=> $this->m_boking_pencari ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pencari', $data);
	}
}
