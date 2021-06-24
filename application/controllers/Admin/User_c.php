<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_c extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		// check_admin();
		$this->load->helper(['form', 'url']);
		$this->load->model(['user_m', 'data_all_m', 'aduan_m']);
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = "Data Users || Admin";
		$data['breadcrumb'] = "Data Users";
		$data['user'] = $this->user_m->get()->result();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/users/user', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function get_teknisi()
	{
		$data['judul'] = 'Data Teknisi || Admin';
		$data['breadcrumb'] = 'Data Teknisi';
		$data['teknisi'] = $this->user_m->get_teknisi()->result_array();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/users/teknisi', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function add_user()
	{
		$user = new stdClass();
		// $user->user_id = null;
		$user->username = null;
		$user->password = null;

		$query_upt = $this->data_all_m->get_upt()->result();
		$query_desa = $this->data_all_m->get()->result();
		$query_opd = $this->data_all_m->get_opd()->result();

		$user->no_tep = null;
		$user->level = null;

		$data = array(
			'page' => 'add',
			'join_upt' => $query_upt,
			'join_desa' => $query_desa,
			'join_opd' => $query_opd,
			'row' => $user
		);
		$data['judul'] = "Form Registrasi || Admin";
		$data['breadcrumb'] = "Form Registrasi";
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/users/form-registrasi', $data);
		$this->load->view('admin/template/footer', $data);
		// }
	}

	public function edit_user($id)
	{
		$query = $this->user_m->get($id);
		if ($query->num_rows() > 0) {
			$user = $query->row();
			$query_desa = $this->data_all_m->get()->result();
			$query_upt = $this->data_all_m->get_upt()->result();
			$query_opd = $this->data_all_m->get_opd()->result();
			$data = array(
				'page' => 'edit',
				'join_desa' => $query_desa,
				'join_upt' => $query_upt,
				'join_opd' => $query_opd,
				'row' => $user
			);
			$data['judul'] = "Form Edit User || Admin";
			$data['breadcrumb'] = "Form Edit";
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/sidebar', $data);
			$this->load->view('admin/users/form-edit', $data);
			$this->load->view('admin/template/footer', $data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan!');";
			echo "window.location='" . site_url('users') . "';</script>";
		}
	}

	public function add_teknisi()
	{

		$config = array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required'
			),
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required|min_length[5]|is_unique[teknisi.username]'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required|min_length[5]',
				'errors' => array(
					'required' => 'You must provide a %s.',
				),
			),
			array(
				'field' => 'passconf',
				'label' => 'Password Confirmation',
				'rules' => 'trim|required|matches[password]',
				'errors' => array(
					'label' => '%s Tidak Sesuai Dengan Password',
				),
			),
			array(
				'field' => 'no_telp',
				'label' => 'Nomor Handphone',
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('is_unique', '<span style="color: red;"><b>{field} Sudah Terpakai</b></span>');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = "Form Registrasi Teknisi || Admin";
			$data['breadcrumb'] = "Form Registrasi Teknisi";
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/sidebar', $data);
			$this->load->view('admin/users/form-registrasi-teknisi', $data);
			$this->load->view('admin/template/footer', $data);
		} else {
			$post = $this->input->post(NULL, TRUE);
			$this->user_m->add_teknisi($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
			} else {
				$this->session->set_flashdata('error', 'Data Gagal Disimpan!');
			}
			redirect('users');
		}
	}

	public function edit_teknisi($id = 0)
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		$this->form_validation->set_rules('old_password', 'Password Lama', 'required|min_length[5]|callback_password_check');
		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules(
				'passconf',
				'Konfirmasi Password',
				'matches[password]',
				array('matches' => '%s Tidak Sesuai')
			);
		}

		if ($this->input->post('passconf')) {
			$this->form_validation->set_rules(
				'passconf',
				'Konfirmasi Password',
				'matches[password]',
				array('matches' => '%s Tidak Sesuai Dengan Password')
			);
		}
		$this->form_validation->set_rules('no_telp', 'Handphone', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Isi!');
		$this->form_validation->set_message('min_length', '{field} Minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '<span style="color: red;"><b>{field} Sudah Terpakai</b></span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->user_m->get_teknisi($id);
			if ($query->num_rows() > 0) {
				$user_teknisi = $query->result_array();
				$data['status'] = $user_teknisi;
				foreach ($user_teknisi as $value) {
					$data['id_teknisi']	= $value['id_teknisi'];
					$data['username']	= $value['username'];
					$data['name']		= $value['name'];
					$data['no_telp']	= $value['no_telp'];
					$data['status']		= $value['status'];
					// $data['password']	= $value['password'];
				}
				$data['judul'] = "Form Edit User || Admin";
				$data['breadcrumb'] = "Form Edit";
				$this->load->view('admin/template/header', $data);
				$this->load->view('admin/template/sidebar', $data);
				$this->load->view('admin/users/form-edit-teknisi', $data);
				$this->load->view('admin/template/footer', $data);
			} else {
				echo "<script>alert('Data Tidak Ditemukan!');";
				echo "window.location='" . site_url('teknisi') . "';</script>";
			}
		} else {
			$post			= $this->input->post(NULL, TRUE);
			$cek			= !empty(base64_encode(md5(sha1($post['old_password'])))) ? base64_encode(md5(sha1($post['old_password']))) : '';
			$get_teknisi	= $this->user_m->get_teknisi($id)->result_array();
			$hash			= $get_teknisi[0]['password'];
			// echo '<pre>';
			// print_r($hash);
			// echo '</pre>';
			if (password_verify($cek, $hash)) {
				echo 'oke';
				$this->user_m->edit_teknisi($post);
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
				redirect('teknisi');
			} else {
				echo "<script>
					alert('Data Gagal Disimpan');
					window.location.href = window.location.href;
					</script>";
			}
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->user_m->add($post);
			// echo '<pre>';
			// var_dump($this->user_m->add());
			// echo '</pre>';
		} elseif (isset($_POST['edit'])) {
			$this->user_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
			redirect('users');
			// echo '<script>alert("'  '");window.location="' . site_url('users') . '";</script>';
			// echo '<script>alert("' . $success . '");window.location="' . site_url('users') . '";</script>';
		} else {
			$this->session->set_flashdata('error', 'Data Gagal Disimpan!');
			// echo '<script>alert("' . $err . '");window.location="' . site_url('tambah-user') . '";</script>';
		}
	}

	function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query('SELECT * FROM `teknisi` WHERE `username` = "' . $post['username'] . '" AND `id_teknisi` !=' . $post['id_teknisi']);
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} Ini Sudah Dipakai, Silahkan Ganti!');
			return false;
		} else {
			return true;
		}
	}

	function password_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query('SELECT * FROM `teknisi` WHERE `password` = "' . $post['password'] . '" AND `id_teknisi` !=' . $post['id_teknisi']);
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('password_check', '{field} Password Yang Anda Masukkan Salah');
			return false;
		} else {
			return true;
		}
	}
}
