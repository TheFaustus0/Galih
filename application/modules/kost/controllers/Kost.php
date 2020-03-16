<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kost');
		 // $this->load->model('login/m_session');
	} 

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kost",
			'namafileview' 	=> "v_tambah_kost",
			'tampil'		=> $this->m_kost->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function input_kost()
	{
		$this->m_kost->input_kost();
		// redirect('kost/tampil_kamar');
	}

	function tampil_kamar(){
		// $this->load->view('v_tambah_kamar');
		
	}
	function input_kamar(){
		$this->m_kost->input_kamar();
	}



}
?>
 