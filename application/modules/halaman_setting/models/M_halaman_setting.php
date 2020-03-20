<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_halaman_setting extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_login')->result();
	}
	function edit(){
			$id_user					= $this->input->post('id_user');

			$nama 						= $this->input->post('nama');
			$no_telp					= $this->input->post('no_telp');
			$foto_user					= $this->input->post('foto_user');

			$this->load->library('upload');
			$nmfile = "file_".time();
			$config['upload_path']		= './assets/images/foto_login/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= 4120;
			$config['max_width']		= 4300;
			$config['max_height']		= 4120;
			$config['file_name'] 		= $nmfile;
			
			$this->upload->initialize($config);

			if($_FILES['foto_user']['name'])
        	{
	            if ($this->upload->do_upload('foto_user'))
	            {
					$gbr = $this->upload->data();
					$syarat = array(
						'nama'			=>$nama,
						'no_telp'		=>$no_telp,
						'foto_user'		=>$gbr['file_name'],

					);

					$this->db->where('id_user',$id_user)->update('t_login', $syarat);

				}
			}else{
					$syarat = array(
							'nama'			=>$nama,
							'no_telp'		=>$no_telp,
							'foto_user'		=>$gbr,
							/*'foto_profil'	=>'kosong1.png',*/
					);

					$this->db->where('id_user',$id_user)->update('t_login', $syarat);
				}
		}
	

		function password(){
            $rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
            
			$id_user						= $this->input->post('id_user');
			$old_password					= $rows['password'];
			$password 						= $this->input->post('old_password');

			$Password_Baru		  			= $this->input->post('password');

			if ($old_password == $password) {
				$syarat = array(
					'password'		=>$Password_Baru,
				);

			$this->db->where('id_user',$id_user)->update('t_login', $syarat);
			}else{
				echo "<script>alert('Password Lama Anda Tidak Sama ');window.location='halaman_setting';</script>";
			}

}
}
?>