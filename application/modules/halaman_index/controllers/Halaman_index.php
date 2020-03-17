<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_index');
		 $this->load->model('login/m_login');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "halaman_index",
			'namafileview' 	=> "V_halaman_index",
			'tampil'		=> $this->m_halaman_index->tampil(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('halaman_index');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('halaman_index');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('halaman_index');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "halaman_index",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 