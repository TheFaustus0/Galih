<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_pemilik');
		 $this->load->model('login/m_login');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman",
			'namafileview' 	=> "V_halaman_pencari",
			'tampil'		=> $this->m_halaman_pemilik->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function input_pemilik()
	{
		$this->m_halaman_pemilik->input_pemilik();
		// redirect('kost/tampil_kamar');
	}

	function tampil_kamar(){
		// $this->load->view('v_tambah_kamar');
		
	}
	function input_pencari(){
		$this->m_halaman_pencari->input_pencari();

	}
}

 