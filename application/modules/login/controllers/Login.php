<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		//get model
		$this->load->model('m_login');
		// $this->load->model('m_halaman_pemilik');
	}

	function index()
	{

		$this->load->view('v_login_penyewa');
	}

	function hal_pemilik(){
			$rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
			$status=$rows['status'];
		if($this->session->userdata('authenticated') && $status == 1){
			redirect('halaman_pemilik');
		}else{
    		redirect('login/login_pemilik');
		}	
	}

	function hal_penyewa(){
		$rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
			$status=$rows['status'];

		if($this->session->userdata('authenticated') && $status == 2){

			redirect('halaman_pencari');
		}else{
    		redirect('login/login_penyewa');
		}
	}

	function login_pemilik(){
		$this->load->view('v_login_pemilik');
	}

	function login_penyewa(){
		$this->load->view('v_login_penyewa');
	}

	function register_pemilik(){
		$this->load->view('v_register_pemilik');
	}

	function register_penyewa(){
		$this->load->view('v_register_penyewa');
	}


	function aksi_register_pemilik(){
		$this->m_login->register_pemilik();
	}

	function aksi_register_penyewa(){
		$this->m_login->register_penyewa();
	}

	function login_aksi_pemilik(){
		
		$no_telp= $this->input->post('no_telp');
		$password= $this->input->post('password');

		$query = $this->db->query('SELECT *FROM t_login  where no_telp='$no_telp' ');

		$where = array('no_telp' => $no_telp,'password' => $password,'status'=>1);

		$cek = $this->m_login->cek('t_login',$where)->num_rows();
		if($cek == 1){
			$data_session = array(

								  'no_telp' => $no_telp,
								  'status' => "login",
								  'authenticated'=> true

								);

			$this->session->set_userdata($data_session);
			redirect('login/hal_pemilik');
 
		}else{
			echo "<script>alert('Username Atau password Anda Salah ');window.location='login/login_pemilik';</script>";
		}
	}


	function login_aksi_penyewa(){
		$no_telp= $this->input->post('no_telp');
		$password= $this->input->post('password');

		$where = array('no_telp' => $no_telp,'password' => $password,'status'=>2);
		$cek = $this->m_login->cek('t_login',$where)->num_rows();
		if($cek == 1){
			$data_session = array(

								  'no_telp' => $no_telp,
								  'status' => "login",
								  'authenticated'=> true

								);

			$this->session->set_userdata($data_session);
			redirect('login/hal_penyewa');
 
		}else{
			echo "<script>alert('Username Atau password Anda Salah ');window.location='login/login_penyewa';</script>";
		}
	}


}
