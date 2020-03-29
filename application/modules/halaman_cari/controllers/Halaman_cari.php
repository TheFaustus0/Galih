<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_cari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_cari');
		 $this->load->model('login/m_login');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}

	function tambah()
	{
		$this->m_halaman_cari->tambah();
		// redirect('halaman_index');
	}

	function edit()
	{
		$this->m_halaman_cari->edit();
		// redirect('halaman_index');
	}

	function hapus($id)
	{
		$this->m_halaman_cari->hapus($id);
		// redirect('halaman_index');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari>cari(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}
	
}
 