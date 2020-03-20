<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_setting extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_setting');
		 $this->load->helper(array('form', 'url'));
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_setting",
			'namafileview' 	=> "V_halaman_setting",
			'tampil'		=> $this->m_halaman_setting ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function edit(){
		$this->m_halaman_setting->edit();
		 redirect('profil_saya');
	}

	function password(){
		$this->m_halaman_setting->password();	
	}
}
?>