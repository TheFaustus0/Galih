<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kost_saya');
		 //dropzone
		 $this->load->helper(array('form','url'));
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kost_saya",
			'namafileview' 	=> "V_kost",
			'tampil'		=> $this->m_kost_saya->tampil(),
		);
		echo Modules::run('template/tampilCore3', $data);
	}
	function edit_kost()
	{
		$this->m_kost_saya->edit_kost();
	}
	function hapus(){
		$this->m_kost_saya->hapus();
		redirect('kost_saya');
}
}
?>
 