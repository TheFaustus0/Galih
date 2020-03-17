<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_pencari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_pencari');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_pencari",
			'namafileview' 	=> "V_halaman_pencari",
			'tampil'		=> $this->m_halaman_pencari->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_pencari', $data);
	}

	
}

 