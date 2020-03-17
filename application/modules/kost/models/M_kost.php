 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kost extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_kost')->result();
	}


	function input_kost(){


		//input data kost
		$nama = $this->input->post('nama_kost');
		$tahun= $this->input->post('tahun');
		$gender= $this->input->post('gender');
		$deskripsi=$this->input->post('deskripsi');
		$alamat= $this->input->post('alamat');
		$data_kost = array('nama_kost' =>$nama,'tahun_dibangun'=>$tahun,'deskripsi'=>$deskripsi,'tipe_kost'=>$gender,'alamat_kost'=>$alamat );
		$this->db->insert('t_kost',$data_kost);

		//selesai

		// // fiktur tambahan
		$wifi=$this->input->post('wifi');
		$listrik=$this->input->post('listrik');
		$kasur=$this->input->post('kasur');
		$air=$this->input->post('air');
		$lemari=$this->input->post('lemari');
		$kursi=$this->input->post('kursi');
		$tv=$this->input->post('tv');
		$water_heater=$this->input->post('water_heater');
		$dapur=$this->input->post('dapur');
		$kamar_luar=$this->input->post('kamar_luar');
		$kamar_mandi_dalam=$this->input->post('kamar_mandi_dalam');


		$fasilitas_kost = array(
							'wifi' => $wifi,
							'listrik' =>$listrik,
							'kasur' =>$kasur,
							'wifi' =>$wifi,
							'air' =>$air,
							'lemari' =>$lemari,
							'kursi' =>$kursi,
							'tv' =>$tv, 
							'water_heater' =>$water_heater,
							'dapur' =>$dapur,
							'kamar_mandi_luar' =>$kamar_luar,
							'kamar_mandi_dalam' =>$kamar_mandi_dalam, 
						);

		$this->db->insert('fasilitas_kost',$fasilitas_kost);
		// // selesai
 
		// // input rumah sakit
		$rumah_skt=$this->input->post('rumah_sakit');
		$jarak_1=$this->input->post('jarak_1');
		$rumah_sakit = array('nama_tempat_sakit' => $rumah_skt, 'jarak_sakit' =>$jarak_1 );
		$this->db->insert('t_rumah_sakit',$rumah_sakit);
		// // selesai

		// // input super market
		$super_market=$this->input->post('super_market');
		$jarak_2=$this->input->post('jarak_2');
		$s_m = array('nama_tempat_market' => $super_market, 'jarak_market' =>$jarak_2 );
		$this->db->insert('t_super_market',$s_m);
		// // selesai

		// // input sekolah
		$sekolah=$this->input->post('sekolah');
		$jarak_3=$this->input->post('jarak_3');
		$sk = array('nama_tempat_sekolah' => $sekolah, 'jarak_sekolah' =>$jarak_3 );
		$this->db->insert('t_sekolah',$sk);
		// // selesai

		// rumah makan urung kenek
		$r_makan=$this->input->post('rumah_makan');
		$jarak4=$this->input->post('jarak_4');

		$rumah_makan = array('nama_tempat_makan' => $r_makan, 'jarak_makan'=>$jarak4 );
		$this->db->insert('t_rumah_makan',$rumah_makan);
		// selesai

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kost/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);
		$this->upload->do_upload('foto_kost');
		$this->upload->do_upload('foto_kost2');
		$this->upload->do_upload('foto_kost3');
		$gambar = $this->upload->data();
				$foto = array(
					'foto' 				=> $gambar['file_name'],
				);
				$this->db->insert('foto_kost', $foto);

	     //mari wes kurang sing denah


	    $this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/denah/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);
		$this->upload->do_upload('denah_1');
		$this->upload->do_upload('denah_2');
		$this->upload->do_upload('denah_3');
		$this->upload->do_upload('denah_4');
		$gbr = $this->upload->data();
				$data = array(
					'denah' 				=> $gbr['file_name'],
				);
		$this->db->insert('t_lantai', $data);

	}


}
 ?>