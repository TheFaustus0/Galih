<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		// $this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core_halaman_index');
		$this->load->view('view_template_core_halaman_dashboard_pemilik');
		$this->load->view('view_template_core_halaman_dashboard_pencari');
		$this->load->view('view_template_core_detail_kamar');
		$this->load->view('view_template_core_halaman_pemilik');
		$this->load->view('view_template_core_halaman_pencari');
		$this->load->view('view_template_core_halaman_kontak');

	}

	// HALAMAN INDEX
		public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core',$data);
	}
		public function tampilCore_halaman_index($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_index',$data);
	}

	//HALAMAN DASHBOARD PEMILIK
	public function tampilCore_halaman_dashboard_pemilik($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_dashboard_pemilik' , $data);
	}

	// HALAMAN DASHBOARD PENCARI
	public function tampilCore_halaman_dashboard_pencari($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_dashboard_pencari' , $data);
	}

	// HALAMAN DETAIL KAMAR
	public function tampilCore_detail_kamar($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_detail_kamar' , $data);
	}

	// HALAMAN PEMILIK
	public function tampilCore_halaman_pemilik($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_pemilik' , $data);
	}

	// HALAMAN PENCARI
	public function tampilCore_halaman_pencari($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_pencari' , $data);
	}
	//HALAMAN KONTAK
	public function tampilCore_halaman_kontak($data)
	{
		$id = $this->session->userdata('session_id');
		
		$this->load->view('view_template_core_halaman_kontak' , $data);
	}		

}
