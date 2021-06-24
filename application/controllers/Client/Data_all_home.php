<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data_all_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_not_login();
        $this->load->model(['data_all_m', 'aduan_m']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Sistem Informasi Geografis Desa";
        $data['desa'] = $this->data_all_m->get()->result();
        $this->load->view('home/template/Header', $data);
        $this->load->view('home/template/Navbar', $data);
        $this->load->view('home/data/desa_home', $data);
        $this->load->view('home/template/Footer', $data);
    }

    public function opd()
    {
        $data['judul'] = "Sistem Informasi Geografis OPD";
        $data['opd'] = $this->data_all_m->get_opd()->result();
        $this->load->view('home/template/Header', $data);
        $this->load->view('home/template/Navbar', $data);
        $this->load->view('home/data/opd_home', $data);
        $this->load->view('home/template/Footer', $data);
    }

    public function upt()
    {
        $data['judul'] = "Sistem Informasi Geografis UPT";
        $data['upt'] = $this->data_all_m->get_upt()->result();
        $this->load->view('home/template/Header', $data);
        $this->load->view('home/template/Navbar', $data);
        $this->load->view('home/data/upt_home', $data);
        $this->load->view('home/template/Footer', $data);
    }

    public function pengaduan($id = 0)
    {

        $data['judul']      = 'Pengaduan';
        $data['get_data']   = $this->aduan_m->getAduan($id)->result_array();
        $data['user']      = $this->session->userdata('user_id');
        foreach ($data['get_data'] as $key => $value) {
            $data['status'] = $value['status'];
        }

        $this->load->view('home/template/Header', $data);
        $this->load->view('home/template/Navbar', $data);
        $this->load->view('home/aduan/pengaduan', $data);
        $this->load->view('home/template/Footer', $data);
    }

    public function edit_pengaduan($id = 0)
    {
        $post = $this->input->post(NULL, TRUE);
        $data['judul'] = 'Edit Pengaduan';
        $data['get_data'] = $this->aduan_m->getAll($id)->result_array();
        foreach ($data['get_data'] as $value) {
            $data['user_id']        = $value['user_id'];
            $data['id_pengaduan']   = $value['id_pengaduan'];
            $data['nama_pelapor']   = $value['nama_pelapor'];
            $data['tgl_aduan']      = $value['tgl_aduan'];
            $data['isi_aduan']      = $value['isi_aduan'];
            $data['gambar']         = $value['gambar'];
        }

        $this->aduan_m->edit($post);
        $this->load->view('home/template/Header', $data);
        $this->load->view('home/template/Navbar', $data);
        $this->load->view('home/aduan/edit-pengaduan', $data);
        $this->load->view('home/template/Footer', $data);

        if ($_POST != NULL) //Kondisional apabila sudah melakukan edit, akan keredirect ke list pengaduan
        {
            $post_db = $this->db->affected_rows();
            // echo '<pre>';
            // echo var_dump($this->session->flashdata('success', 'Laporan Berhasil Disimpan!'));
            // echo '</pre>';
            if ($post_db == 1) {
                $this->session->set_flashdata('success', 'Laporan Berhasil Disimpan!');
            }
            redirect('pengaduan');
        }
    }
}
