<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_kamar')->result();
	}

	function lantai_1(){

		
		//input data kost
		$nama = $this->input->post('nama_kamar');
		$ukuran= $this->input->post('ukuran_kamar');
		$tipe_kost= $this->input->post('gender');
		$deskripsi=$this->input->post('deskripsi_kamar');
		$perhari= $this->input->post('perhari');
		$perminggu= $this->input->post('perminggu');
		$perbulan= $this->input->post('perbulan');
		$pertahun= $this->input->post('pertahun');

		$data_kamar = array(
							'nama_kamar' =>$nama,
							'ukuran'=>$ukuran,
							'tipe_kost'=>$tipe_kost,
							'deskripsi'=>$deskripsi,
							'perhari'=>$perhari,
							'perminggu'=>$perminggu,
							'perbulan'=>$perbulan,
							'pertahun'=>$pertahun,
							'lantai' =>'1',
							 );
		
		$this->db->insert('t_kamar',$data_kamar);
		//selesai

		//input data kost
		$nama = $this->input->post('nama_kamar');
		$ukuran= $this->input->post('ukuran_kamar');
		$tipe_kost= $this->input->post('gender');
		$deskripsi=$this->input->post('deskripsi_kamar');
		$perhari= $this->input->post('perhari');
		$perminggu= $this->input->post('perminggu');
		$perbulan= $this->input->post('perbulan');
		$pertahun= $this->input->post('pertahun');

		$data_kamar = array(
							'nama_kamar' =>$nama,
							'ukuran'=>$ukuran,
							'tipe_kost'=>$tipe_kost,
							'deskripsi'=>$deskripsi,
							'perhari'=>$perhari,
							'perminggu'=>$perminggu,
							'perbulan'=>$perbulan,
							'pertahun'=>$pertahun,
							'lantai' 		=> '1',
							 );
		
		$this->db->insert('t_kamar',$data_kamar);
		//selesai

		// // fiktur tambahan
		$kulkas=$this->input->post('kulkas');
		$mesincuci=$this->input->post('mesincuci');
		$sofa=$this->input->post('sofa');
		$wifi=$this->input->post('wifi');
		$kasur=$this->input->post('kasur');
		$lemari=$this->input->post('lemari');
		$tv=$this->input->post('tv');
		$dapur=$this->input->post('dapur');

		$fasilitas_kamar = array(
							'kulkas' => $kulkas,
							'mesin_cuci' =>$mesincuci,
							'sofa' =>$sofa,
							'wifi' =>$wifi,
							'kasur' =>$kasur,
							'lemari' =>$lemari,
							'tv' =>$tv,
							'dapur' =>$dapur, 
							'lantai' =>'1'
						);

		$this->db->insert('fasilitas_kamar',$fasilitas_kamar);
		// // selesai



		$this->load->library('upload');

		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kamar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		$this->upload->do_upload('foto_kamar1');
		$kamar_1 = $this->upload->data();
				$foto_kamar1 = array(
					'foto_kamar' 				=> $kamar_1['file_name'],
				);

		$this->db->insert('foto_kamar',$foto_kamar1);

	}

		function lantai_2(){

		$nama_kamar			= $this->input->post('nama_kamar');
		$ukuran_kamar		= $this->input->post('ukuran_kamar');
		$gender				= $this->input->post('gender');
		$deskripsi_kamar	= $this->input->post('deskripsi_kamar');
		$perhari			= $this->input->post('perhari');
		$perminggu			= $this->input->post('perminggu');
		$perbulan			= $this->input->post('perbulan');
		$pertahun			= $this->input->post('pertahun');

		$lantai_1 = array('nama_kamar' 	=>$nama_kamar ,
						  'ukuran'		=>$ukuran_kamar,
						  'tipe_kost'	=>$gender,
						  'deskripsi'	=>$deskripsi_kamar ,
						  'perhari'		=>$perhari ,
						  'perminggu' 	=>$perminggu,
						  'perbulan' 	=>$perbulan ,
						  'pertahun' 	=>$pertahun,
						  'lantai' 		=> '2',
						);
		$this->db->insert('t_kamar',$lantai_1);


		// // fiktur tambahan
		$kulkas=$this->input->post('kulkas2');
		$mesincuci=$this->input->post('mesincuci2');
		$sofa=$this->input->post('sofa2');
		$wifi=$this->input->post('wifi2');
		$kasur=$this->input->post('kasur2');
		$lemari=$this->input->post('lemari2');
		$tv=$this->input->post('tv2');
		$dapur=$this->input->post('dapur2');

		$fasilitas_kamar = array(
							'kulkas' => $kulkas,
							'mesin_cuci' =>$mesincuci,
							'sofa' =>$sofa,
							'wifi' =>$wifi,
							'kasur' =>$kasur,
							'lemari' =>$lemari,
							'tv' =>$tv,
							'dapur' =>$dapur,
							'lantai' =>'2'
						);

		$this->db->insert('fasilitas_kamar',$fasilitas_kamar);
		// // selesai



		$this->load->library('upload');

		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kamar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		$this->upload->do_upload('foto_kamar1');
		$kamar_1 = $this->upload->data();
				$foto_kamar1 = array(
					'foto' 				=> $kamar_1['file_name'],
					'lantai' =>'2'
				);


		$this->db->insert('foto_kamar',$foto_kamar1);

	}
		function lantai_3(){

		$nama_kamar			= $this->input->post('nama_kamar');
		$ukuran_kamar		= $this->input->post('ukuran_kamar');
		$gender				= $this->input->post('gender');
		$deskripsi_kamar	= $this->input->post('deskripsi_kamar');
		$perhari			= $this->input->post('perhari');
		$perminggu			= $this->input->post('perminggu');
		$perbulan			= $this->input->post('perbulan');
		$pertahun			= $this->input->post('pertahun');

		$lantai_1 = array('nama_kamar' 	=>$nama_kamar ,
						  'ukuran'		=>$ukuran_kamar,
						  'tipe_kost'	=>$gender,
						  'deskripsi'	=>$deskripsi_kamar ,
						  'perhari'		=>$perhari ,
						  'perminggu' 	=>$perminggu,
						  'perbulan' 	=>$perbulan ,
						  'pertahun' 	=>$pertahun,
						  'lantai' 		=> '3',
						  
						);
		$this->db->insert('t_kamar',$lantai_1);


		// // fiktur tambahan
		$kulkas=$this->input->post('kulkas3');
		$mesincuci=$this->input->post('mesincuci3');
		$sofa=$this->input->post('sofa3');
		$wifi=$this->input->post('wifi3');
		$kasur=$this->input->post('kasur3');
		$lemari=$this->input->post('lemari3');
		$tv=$this->input->post('tv3');
		$dapur=$this->input->post('dapur3');

		$fasilitas_kamar = array(
							'kulkas' => $kulkas,
							'mesin_cuci' =>$mesincuci,
							'sofa' =>$sofa,
							'wifi' =>$wifi,
							'kasur' =>$kasur,
							'lemari' =>$lemari,
							'tv' =>$tv,
							'dapur' =>$dapur, 
							'lantai' => '3',
						);

		$this->db->insert('fasilitas_kamar',$fasilitas_kamar);
		// // selesai



		$this->load->library('upload');

		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kamar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		$this->upload->do_upload('foto_kamar1');
		$kamar_1 = $this->upload->data();
				$foto_kamar1 = array(
					'foto' 				=> $kamar_1['file_name'],
					'lantai' 		=> '3',
				);

		$this->db->insert('foto_kamar',$foto_kamar1);

	}
		function lantai_4(){

		$nama_kamar			= $this->input->post('nama_kamar');
		$ukuran_kamar		= $this->input->post('ukuran_kamar');
		$gender				= $this->input->post('gender');
		$deskripsi_kamar	= $this->input->post('deskripsi_kamar');
		$perhari			= $this->input->post('perhari');
		$perminggu			= $this->input->post('perminggu');
		$perbulan			= $this->input->post('perbulan');
		$pertahun			= $this->input->post('pertahun');

		$lantai_1 = array('nama_kamar' 	=>$nama_kamar ,
						  'ukuran'		=>$ukuran_kamar,
						  'tipe_kost'	=>$gender,
						  'deskripsi'	=>$deskripsi_kamar ,
						  'perhari'		=>$perhari ,
						  'perminggu' 	=>$perminggu,
						  'perbulan' 	=>$perbulan ,
						  'pertahun' 	=>$pertahun,
						  'lantai' 		=> '4',
						);
		$this->db->insert('t_kamar',$lantai_1);


		// // fiktur tambahan
		$kulkas=$this->input->post('kulkas4');
		$mesincuci=$this->input->post('mesincuci4');
		$sofa=$this->input->post('sofa4');
		$wifi=$this->input->post('wifi4');
		$kasur=$this->input->post('kasur4');
		$lemari=$this->input->post('lemari4');
		$tv=$this->input->post('tv4');
		$dapur=$this->input->post('dapur4');

		$fasilitas_kamar = array(
							'kulkas' => $kulkas,
							'mesin_cuci' =>$mesincuci,
							'sofa' =>$sofa,
							'wifi' =>$wifi,
							'kasur' =>$kasur,
							'lemari' =>$lemari,
							'tv' =>$tv,
							'dapur' =>$dapur,
							'lantai' => '4', 
						);

		$this->db->insert('fasilitas_kamar',$fasilitas_kamar);
		// // selesai



		$this->load->library('upload');

		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kamar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		$this->upload->do_upload('foto_kamar1');
		$kamar_1 = $this->upload->data();
				$foto_kamar1 = array(
					'foto' 				=> $kamar_1['file_name'],
					'lantai' 		=> '4',
				);

		$this->db->insert('foto_kamar',$foto_kamar1);

	}
		function lantai_5(){

		$nama_kamar			= $this->input->post('nama_kamar');
		$ukuran_kamar		= $this->input->post('ukuran_kamar');
		$gender				= $this->input->post('gender');
		$deskripsi_kamar	= $this->input->post('deskripsi_kamar');
		$perhari			= $this->input->post('perhari');
		$perminggu			= $this->input->post('perminggu');
		$perbulan			= $this->input->post('perbulan');
		$pertahun			= $this->input->post('pertahun');

		$lantai_1 = array('nama_kamar' 	=>$nama_kamar ,
						  'ukuran'		=>$ukuran_kamar,
						  'tipe_kost'	=>$gender,
						  'deskripsi'	=>$deskripsi_kamar ,
						  'perhari'		=>$perhari ,
						  'perminggu' 	=>$perminggu,
						  'perbulan' 	=>$perbulan ,
						  'pertahun' 	=>$pertahun,
						  'lantai' 		=> '5',
						);
		$this->db->insert('t_kamar',$lantai_1);


		// // fiktur tambahan
		$kulkas=$this->input->post('kulkas5');
		$mesincuci=$this->input->post('mesincuci5');
		$sofa=$this->input->post('sofa5');
		$wifi=$this->input->post('wifi5');
		$kasur=$this->input->post('kasur5');
		$lemari=$this->input->post('lemari5');
		$tv=$this->input->post('tv5');
		$dapur=$this->input->post('dapur5');

		$fasilitas_kamar = array(
							'kulkas' => $kulkas,
							'mesin_cuci' =>$mesincuci,
							'sofa' =>$sofa,
							'wifi' =>$wifi,
							'kasur' =>$kasur,
							'lemari' =>$lemari,
							'tv' =>$tv,
							'dapur' =>$dapur,
							'lantai' => '5', 
						);

		$this->db->insert('fasilitas_kamar',$fasilitas_kamar);
		// // selesai


		$this->load->library('upload');

		$nmfile = "file_".time();
		$config['upload_path']		= './assets/images/foto_kamar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		$this->upload->do_upload('foto_kamar1');
		$kamar_1 = $this->upload->data();
				$foto_kamar1 = array(
					'foto' 				=> $kamar_1['file_name'],
					'lantai' =>'5',
				);

		$this->db->insert('foto_kamar',$foto_kamar1);

	}

}
 ?>