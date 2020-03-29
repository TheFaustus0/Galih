<?php<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_disewa extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kost_disewa');
		 //dropzone
		 $this->load->helper(array('form','url'));
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "kost_disewa",
			'namafileview' 	=> "V_kost_disewa",
			'tampil'		=> $this->m_kost_disewa->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
	}
	function edit()
	{	
		 $data['tampil']=$this->m_kost_disewa->edit();
		$this->load->view('V_kost_disewa', $data);
	}
	function hapus($id_kost){
		$this->m_kost_disewa->hapus($id_kost);
		// redirect('kost_saya');
}
}
?>