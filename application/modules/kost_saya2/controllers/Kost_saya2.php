<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_saya2 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kost_saya2');
		 //dropzone
		 $this->load->helper(array('form','url'));
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kost_saya2",
			'namafileview' 	=> "V_kost_saya2",
			'tampil'		=> $this->m_kost_saya2->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function edit_tampil($id_kost)
	{

		$data = array(
			'namamodule' 	=> "kost_saya2",
			'namafileview' 	=> "V_kost_saya2",
			'tampil'		=> $this->m_kost_saya2->edit_tampil($id_kost),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}

	function edit_kost(){
		$this->m_kost_saya2->edit_kost();
		redirect('kost_saya');
	}


}
?>
 