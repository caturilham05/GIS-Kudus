<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_teknisi_c extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login_teknisi();
        check_teknisi();
        $this->load->model(['data_all_m', 'aduan_m', 'user_m']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        check_not_login_teknisi();
        check_teknisi();
        // check_admin();
        $data['judul']     = "GIS Kominfo || Teknisi";
        $data['dashboard'] = "Dashboard";
        $data['data']      = $this->aduan_m->getAll()->result();
        $data['tanda']     = $this->aduan_m->get_marker()->result();
        $this->load->view('teknisi/template/header', $data);
        $this->load->view('teknisi/template/sidebar', $data);
        $this->load->view('teknisi/index', $data);
        $this->load->view('teknisi/template/footer', $data);
    }

    public function data_pengaduan()
    {
        check_not_login_teknisi();
        $data['judul']              = "Data Pengaduan || Teknisi";
        $data['laporan']            = "Data Pengaduan";
        $data['join']               = $this->aduan_m->get()->result();
        $data['get_taken_teknisi']  = $this->aduan_m->taken_teknisi()->result();
        $data['id_teknisi']         = $this->session->userdata('id_teknisi');
        /* Kondisional ketika teknisi mengambil aduan */
        if (isset($_POST['taken_teknisi'])) {
            $get_aduan = $this->aduan_m->get($_POST['taken_teknisi'])->result();
            foreach ($get_aduan as $value) {
                $post = array(
                    'id_pengaduan' => $value->id_pengaduan,
                    'id_desa' => $value->id_desa,
                    'id_upt' => $value->id_upt,
                    'id_opd' => $value->id_opd,
                    'id_teknisi' => $data['id_teknisi'],
                    'nama_pelapor' => $value->nama_pelapor,
                    'status' =>  1
                );
                $this->aduan_m->add_aduan_teknisi($post);
                $edit_taken_teknisi = array(
                    'id_pengaduan' => $value->id_pengaduan,
                    'is_taken_teknisi' => 1
                );
                $this->aduan_m->edit_is_taken_teknisi($edit_taken_teknisi);
                redirect('teknisi-data-pengaduan');
            }
        }
        $this->load->view('teknisi/template/header', $data);
        $this->load->view('teknisi/template/sidebar', $data);
        $this->load->view('teknisi/data_pengaduan', $data);
        $this->load->view('teknisi/template/footer', $data);
    }
}
