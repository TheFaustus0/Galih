<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_login extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

	function cek($table,$where){
		return $this->db->get_where($table,$where);
	}

		function register_pemilik(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$no_telp=$this->input->post('no_telp');

		$user = array('nama' =>$username,
					  'password'=>$password,
					  'no_telp'=>$no_telp,
					  'status'=>1
					  
		 );
		$this->db->insert('t_login',$user);
		echo "<script>alert('Berhasil Register, Silahkan Login ');window.location='login/login_pemilik';</script>";
	}

	function register_penyewa(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$no_telp=$this->input->post('no_telp');

		$user = array('nama' =>$username,
					  'password'=>$password,
					  'no_telp'=>$no_telp,
					  'status'=>2
					  
		 );
		$this->db->insert('t_login',$user);
		echo "<script>alert('Berhasil Register, Silahkan Login ');window.location='login/login_penyewa';</script>";
	}

}
?>
