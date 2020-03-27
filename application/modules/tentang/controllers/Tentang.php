<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tentang');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tentang",
			'namafileview' 	=> "V_tentang",
			'tampil'		=> $this->m_tentang->tampil(),
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
		$this->m_tentang->edit();
		// redirect('tentang');
	}

	function hapus($id)
	{
		$this->m_tentang->hapus($id);
		redirect('tentang');
	}
}
?>