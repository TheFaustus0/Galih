<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah_kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_ubah_kamar');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "ubah_kamar",
			'namafileview' 	=> "V_ubah_kamar",
			'tampil'		=> $this->m_ubah_kamar->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function edit(){
		$this->m_ubah_kamar->edit();
        redirect('kamar_saya');
	}


	}