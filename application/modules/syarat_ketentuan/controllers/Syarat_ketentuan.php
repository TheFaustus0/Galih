<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_ketentuan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_syarat_ketentuan');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "syarat_ketentuan",
			'namafileview' 	=> "V_syarat_ketentuan",
			'tampil'		=> $this->m_syarat_ketentuan->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}

	// function tambah()
	// {
	// 	$this->m_tentang->tambah();
	// 	redirect('tentang');
	// }

	function edit()
	{
		$this->m_syarat_ketentuan->edit();
		// redirect('tentang');
	}

	function hapus($id)
	{
		$this->m_syarat_ketentuan->hapus($id);
		redirect('syarat_ketentuan');
	}
}
?>