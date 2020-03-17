<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_pemilik');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_pemilik",
			'namafileview' 	=> "v_halaman_pemilik",
			'tampil'		=> $this->m_halaman_pemilik->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_pemilik', $data);
	}

	}

 