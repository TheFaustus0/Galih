<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_detail_kamar');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Detail_kamar",
			'namafileview' 	=> "V_detail_kamar",
			'tampil'		=> $this->m_detail_kamar->tampil(),
		);
		echo Modules::run('template/tampilCore_detail_kamar', $data);
	}

	function pemesanan()
	{
		$this->m_detail_kamar->input_tambah_kamar();
	}

	
	
}
 