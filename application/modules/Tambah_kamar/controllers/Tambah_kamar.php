<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_kamar extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kamar');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tambah_kamar",
			'namafileview' 	=> "v_tambah_kamar",
			'tampil'		=> $this->m_kamar->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function lantai_1(){
		$this->m_kamar->lantai_1();
	}
	function lantai_2(){
		$this->m_kamar->lantai_2();
	}
	function lantai_3(){
		$this->m_kamar->lantai_3();
	}
	function lantai_4(){
		$this->m_kamar->lantai_4();
	}
	function lantai_5(){
		$this->m_kamar->lantai_5();
	}


}
?>
 