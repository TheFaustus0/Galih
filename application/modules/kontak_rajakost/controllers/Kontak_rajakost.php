<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_rajakost extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model('m_kontak_rajakost');
	
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kontak_rajakost",
			'namafileview' 	=> "V_kontak_rajakost",
			'tampil'		=> $this->m_kontak_rajakost ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_kontak', $data);
	}
	function kontak()
	{
		$this->m_kontak_rajakost->input_pesan();
	}

}
