<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kamar_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kamar_saya');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kamar_saya",
			'namafileview' 	=> "V_kamar_saya",
			'tampil'		=> $this->m_kamar_saya->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
}
}
?>
 