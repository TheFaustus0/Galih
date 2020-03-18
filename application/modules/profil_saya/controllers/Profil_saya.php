<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_profil_saya');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "profil_saya",
			'namafileview' 	=> "V_profil_saya",
			'tampil'		=> $this->m_profil_saya ->tampil(), 
		);
		echo Modules::run('template/tampilCore2', $data);
	}
	/*function edit(){
		$this->m_setting_profile->edit();
		redirect('profil_saya');
	}

	function password(){
		$this->m_setting_profile->edit_password();
	}*/
}
?>