<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_guru');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_dashboard",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->m_data_guru ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
}
?>