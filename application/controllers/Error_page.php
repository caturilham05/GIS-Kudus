<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error_page extends CI_Controller
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
        $this->load->view('home/template/Header');
		$this->load->view('home/template/Navbar');
        $this->load->view('errors/html/error_404');
		$this->load->view('home/template/Footer');

    }
}
