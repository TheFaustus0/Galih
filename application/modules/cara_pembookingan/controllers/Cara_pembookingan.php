<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_pembookingan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_cara_pembookingan');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "cara_pembookingan",
			'namafileview' 	=> "V_cara_pembookingan",
			'tampil'		=> $this->m_cara_pembookingan->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
}
