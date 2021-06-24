<?php

use phpDocumentor\Reflection\Types\True_;

defined('BASEPATH') or exit('No direct script access allowed');

class Aduan_c extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['aduan_m', 'data_all_m']);
		$this->load->library('form_validation');
	}


	public function index()
	{
		check_not_login();
		$data['judul'] = "Laporan Data Pengaduan || Admin";
		$data['laporan'] = "Laporan Data Pengaduan";
		$data['join'] = $this->aduan_m->get_data_aduan()->result();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/laporan/laporan-aduan', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function data_pengaduan()
	{
		check_not_login();
		$data['judul'] = "Data Pengaduan || Admin";
		$data['laporan'] = "Data Pengaduan";
		$data['join'] = $this->aduan_m->get()->result();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/laporan/data-pengaduan', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function downloadAll()
	{

		$this->load->library('mypdf');
		check_not_login();

		$data['download'] = $this->aduan_m->get_data_aduan()->result();
		$this->mypdf->generate('admin/laporan/download-laporan', $data);
	}

	public function downloadById($id)
	{
		check_not_login();

		$data['row'] = $this->aduan_m->get_data_aduan($id)->row();
		$html = $this->load->view('admin/laporan/download-id', $data, TRUE);
		$this->fungsi->PdfGenerator($html, 'Laporan-Aduan-' . $data['row']->nama_pelapor, 'A4', 'portrait');
	}

	public function add()
	{
		check_not_login_user();

		$aduan = new stdClass();
		$aduan->id_pengaduan = null;
		$aduan->user_id = null;
		$aduan->id_desa = null;
		$aduan->id_upt = null;
		$aduan->id_opd = null;
		$aduan->nama_pelapor = null;
		$aduan->tgl_aduan = null;

		$aduan->isi_aduan = null;


		$data = array(
			'page' => 'add',
			'row' => $aduan
		);

		$data['judul'] = "Form Pengaduan";
		$data['data'] = $this->aduan_m->get()->result();
		$this->load->view('home/template/Header', $data);
		$this->load->view('home/template/Navbar', $data);
		$this->load->view('home/aduan/form-aduan', $data);
		$this->load->view('home/template/Footer', $data);
	}

	public function edit_aduan($id)
	{
		$query = $this->aduan_m->get($id);
		if ($query->num_rows() > 0) {
			$konfirmasi = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $konfirmasi
			);
			check_not_login();
			$data['judul'] = "Konfirmasi Pengaduan || Admin";
			$data['laporan'] = "Konfirmasi Pengaduan";
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/sidebar', $data);
			$this->load->view('admin/laporan/data-edit', $data);
			$this->load->view('admin/template/footer', $data);
		}
	}



	public function proses()
	{
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']      = 5120;
		$config['file_name']      = 'pengaduan-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
		$this->load->library('upload', $config);



		$post = $this->input->post(null, true);
		if (isset($_POST['add'])) {
			if (@$_FILES['gambar']['name'] != null) {
				if ($this->upload->do_upload('gambar')) {
					$post['gambar'] = $this->upload->data('file_name');
					$this->aduan_m->add($post);
					if ($this->db->affected_rows() == 1) {
						$this->session->set_flashdata('success', 'Laporan Berhasil Disimpan!');
					}
					redirect('/');
				} else {
					$err = $this->upload->display_errors();
					$this->session->set_flashdata('error', $err);
					echo "<script>alert(`$err`);window.location='" . site_url('form-pengaduan') . "';</script>";
				}
			} else {
				$post['gambar'] = null;
				$this->aduan_m->add($post);
				if ($this->db->affected_rows() == 1) {
					$this->session->set_flashdata('success', 'Laporan Berhasil Disimpan!');
				}
				redirect('/');
			}
		}elseif(isset($_POST['edit'])){
			$this->aduan_m->edit($post);
		}
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data Berhasil Diedit');
		}
		echo "<script>window.location='".site_url('data-pengaduan')."';</script>";
	}

}
