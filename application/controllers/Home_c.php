<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_c extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// check_already_login_user();
		$this->load->model(['data_all_m', 'aduan_m']);
		$this->load->library('form_validation');
	}
	public function index()
	{
		check_user();
		$data['judul'] = 'Sistem Informasi Geografis';
		$data['gambar'] = $this->aduan_m->gambar()->result();
		$this->load->view('home/template/Header', $data);
		$this->load->view('home/template/Navbar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('home/template/Footer', $data);
	}
}
