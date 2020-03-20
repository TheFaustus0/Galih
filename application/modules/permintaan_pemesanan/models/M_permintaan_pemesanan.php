<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_permintaan_pemesanan extends CI_Model {

	function tampil()
	{
		return $this->db->get('foto_kamar')->result();
	}
	function tambah()
	{
		$nama   = $this->input->post('nama_guru');
		$alamat	= $this->input->post('alamat_guru');
		$telefon 	= $this->input->post('no_telefon');


		$data = array(
					'nama_guru'		=> $nama,
					'alamat_guru'		=> $alamat,
					'no_telefon'		=> $telefon,
					
				);
		/*menghubungkan*/
		$this->db->insert('data_guru',$data);
		redirect('data_guru');
	}
	function hapus($id)
	{
		/*dimana*/
		$this->db->where('id',$id)->delete('data_guru');
	}
	function edit()
	{
	$id = $this->input->post('id');

	$nama_guru   = $this->input->post('nama_guru');
    $alamat_guru = $this->input->post('alamat_guru');
    $no_telefon = $this->input->post('no_telefon');
    /*himpunan*/
    $data = array('nama_guru' => $nama_guru, 'alamat_guru' => $alamat_guru,'no_telefon' => $no_telefon);

    $this->db->where('id',$id)->update('data_guru',$data);
}
}
?>