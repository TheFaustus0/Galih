<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ubah_kamar extends CI_Model {

	function tampil()
	{
		 $this->db->select('*');
		 $this->db->from('t_kamar');
		 $this->db->join('foto_kamar','foto_kamar.id_foto_kamar=t_kamar.id_foto_kamar');
		 $this->db->join('fasilitas_kamar','fasilitas_kamar.id_fasilitas_kamar=t_kamar.id_fasilitas_kamar');
		 $query = $this->db->get();
		 return $query->result();
	}
	function edit(){
			//input data kost
        $id_kamar					= $this->input->post('id_kamar');

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
							
							 );
		
		$this->db->where('id_kamar',$id_kamar)->update('t_kamar', $data_kamar);

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
						);

		$this->db->update('fasilitas_kamar',$fasilitas_kamar);
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
		$this->upload->do_upload('foto_kamar');
		$this->upload->do_upload('foto_kamaer2');
		$this->upload->do_upload('foto_kamar3');
		$this->upload->do_upload('foto_kamar4');
		$this->upload->do_upload('foto_kamaer5');
		$this->upload->do_upload('foto_kamar6');
		$gambar = $this->upload->data();
				$foto = array(
					'foto' 				=> $gambar['file_name'],
				);
				$this->db->update('foto_kamar', $foto);
			}

function hapus()
	{
		$this->db->where('id_kamar', $id)->delete('t_kamar');
	}

	}
