<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_pencari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_pencari');
		 // $this->load->model('m_login');
	}

	
	// index
	function index()
	{
		$rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
		$status=$rows['status'];

		if($this->session->userdata('authenticated') && $status == 2){
				$data = array(
					'namamodule' 	=> "halaman_pencari",
					'namafileview' 	=> "V_halaman_pencari",
					'tampil'		=> $this->m_halaman_pencari->tampil(),
				);
				echo Modules::run('template/tampilCore_halaman_pencari', $data);
	}else{
			echo "<script>alert('Anda Belum Login, Silahkan Login Sebagai Penyewa ');window.location='login/login_penyewa';</script>";
		}

	
}

	function log_out(){

		$this->session->sess_destroy();
		redirect('halaman_index');
	}

}

 