<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_cari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_cari');
		 $this->load->model('login/m_login');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_kontak', $data);
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari>cari(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}
	
}
 