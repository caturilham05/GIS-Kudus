<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_all_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('data_all_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Data Desa || Admin";
        $data['breadcrumb'] = "Data Desa Kab. Kudus";
        $data['desa'] = $this->data_all_m->get()->result();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/desa/data-desa', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function opd()
    {
        $data['judul'] = "Data OPD || Admin";
        $data['breadcrumb'] = "Data OPD Kab. Kudus";
        $data['opd'] = $this->data_all_m->get_opd()->result();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/desa/data-opd', $data);
        $this->load->view('admin/template/footer', $data);
    }
    
    public function upt()
    {
        $data['judul'] = "Data UPT || Admin";
        $data['breadcrumb'] = "Data UPT Kab. Kudus";
        $data['upt'] = $this->data_all_m->get_upt()->result();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/desa/data-upt', $data);
        $this->load->view('admin/template/footer', $data);
    }
}
