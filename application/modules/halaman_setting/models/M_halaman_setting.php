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
			$config['upload_path']		= 'assets/images/user/';
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
			$id_user						= $this->input->post('id_user');

			$Password_Baru		  			= $this->input->post('password');
			//  var_dump($Password_Baru);

			// $pass = md5($this->input->post('password'));
			$syarat = array(
				'password'		=>$Password_Baru,
			);

		$this->db->where('id_user',$id_user)->update('t_login', $syarat);
}
}
?>