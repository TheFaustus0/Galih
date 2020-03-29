<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_cari extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_halaman_cari');
		 $this->load->model('login/m_login');
	}

	
	// index
	function index()
	{
		$jumlah_data = $this->m_halaman_cari->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = site_url('halaman_cari/index');
		$config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
    	$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$from = $this->uri->segment(3);

                $this->pagination->initialize($config);
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari->tampil($config['per_page'],$from),
		);
		echo Modules::run('template/tampilCore_halaman_kontak', $data);
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "halaman_cari",
			'namafileview' 	=> "V_halaman_cari",
			'tampil'		=> $this->m_halaman_cari>cari(),
		);
		echo Modules::run('template/tampilCore_halaman_index', $data);
	}
	
}
 