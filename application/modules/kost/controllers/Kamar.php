<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kamar');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kamar",
			'namafileview' 	=> "V_tambah_kamar",
			'tampil'		=> $this->m_kamar ->tampil(), 
		);
		echo Modules::run('template/tampilCore2', $data);
	}


	function tampil_kamar(){
		// $this->load->view('v_tambah_kamar');
		
	}
	function input_kamar(){
		$this->m_kamar->input_kamar();
	}
}
?>