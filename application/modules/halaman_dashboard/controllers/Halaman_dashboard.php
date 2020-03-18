<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_guru');
	}

	
	// index
	function index()
	{
		$rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
		$status=$rows['status'];

		if($this->session->userdata('authenticated') && $status == 1){
			$data = array(
				'namamodule' 	=> "halaman_dashboard",
				'namafileview' 	=> "V_data_guru",
				'tampil'		=> $this->m_data_guru ->tampil(), 
			);
			echo Modules::run('template/tampilCore_halaman_dashboard_pemilik', $data);
		}else{
			echo "<script>alert('Anda Belum Login, Silahkan Login Sebagai Pemilik ');window.location='login/login_pemilik';</script>";
		}
	}

		function log_out(){

		$this->session->sess_destroy();
		redirect('halaman_index');
	}
}
?>