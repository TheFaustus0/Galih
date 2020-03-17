<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_pemilik extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_pemilik');
	}

	
	// index
	function index()
	{
		$rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
		$status=$rows['status'];

		if($this->session->userdata('authenticated') && $status == 1){
				$data = array(
					'namamodule' 	=> "halaman_pemilik",
					'namafileview' 	=> "v_halaman_pemilik",
					'tampil'		=> $this->m_halaman_pemilik->tampil(),
				);
				echo Modules::run('template/tampilCore_halaman_pemilik', $data);
		}else{
			echo "<script>alert('Anda Belum Login, Silahkan Login Sebagai Pemilik ');window.location='login/login_pemilik';</script>";
		}

	}

	function log_out(){

		$this->session->sess_destroy();
		redirect('halaman_index');
	}

	}

 