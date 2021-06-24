<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_admin_c extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model(['data_all_m', 'aduan_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		check_not_login();
		check_admin();
		$data['judul'] = "GIS Kominfo || Admin";
		$data['dashboard'] = "Dashboard";
		$data['data'] = $this->aduan_m->getAll()->result();
		$data['tanda'] = $this->aduan_m->get_marker()->result();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/template/footer', $data);
	}

	
}
