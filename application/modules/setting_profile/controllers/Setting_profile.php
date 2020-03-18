<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_profile extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_setting_profile');
		 $this->load->helper(array('form', 'url'));
		//  $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Setting_profile",
			'namafileview' 	=> "V_setting_profile",
			'tampil'		=> $this->m_setting_profile ->tampil(), 
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function edit(){
		$this->m_setting_profile->edit();
		 redirect('profil_saya');
	}

	function password(){
		$this->m_setting_profile->password();	
	}
}
?>