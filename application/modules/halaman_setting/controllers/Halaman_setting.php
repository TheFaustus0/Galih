<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_setting extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_setting');

	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_setting",
			'namafileview' 	=> "V_halaman_setting",
			'tampil'		=> $this->m_halaman_setting->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pencari', $data);
	}


	}

 