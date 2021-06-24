<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

    public function login()
    {
        check_already_login();
        $data['judul'] = "Login Admin";
        $this->load->view('login', $data);
    }

    // public function login_teknisi()
    // {
    //     check_already_login_teknisi();
    //     $data['judul'] = "Login Teknisi";
    //     $this->load->view('login-teknisi', $data);
    // }

    public function proses()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                $this->session->set_flashdata('success', 'Login Berhasil!');

                redirect('administrator');
            } else {
                echo "<script>
                         alert('Login Gagal! Password atau Username Yang Anda Masukkan Salah');
                         window.location = '" . site_url('login') . "';
                     </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('userid');
        $this->session->unset_userdata($params);
        $this->session->set_flashdata('success', 'Logout Berhasil!');
        // echo "<script>
        //         alert('Logout Berhasil!');
        //         window.location = '".site_url('login')."';
        //     </script>";
        redirect('login');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function login_teknisi()
    {
        check_already_login_teknisi();
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Login Teknisi";
            $this->load->view('login-teknisi', $data);
        }else{
            $username = $this->input->post('username');
            $password = base64_encode(md5(sha1($this->input->post('password'))));
            $cek = $this->user_m->login_teknisi($username, $password);
            //  echo '<pre>';
            // print_r($password);
            // echo '<pre>';
            if ($cek == false) {
                echo "<script>
                alert('Login Gagal! Username dan Password Tidak Ditemukan!');window.location='" . site_url('teknisi-login') . "';
                </script>";
            } else {
                if (password_verify($password, $cek->password)) {
                    $this->session->set_userdata('id_teknisi', $cek->id_teknisi);
                    $this->session->set_userdata('username', $cek->username);
                    $this->session->set_userdata('name', $cek->name);
                    $berhasil = $this->session->userdata('username');
                    switch ($cek->id_teknisi) {
                        case $cek->id_teknisi:
                            echo "<script>
                                alert('Login Berhasil! Selamat Datang $berhasil');
                                window.location='" . site_url('teknisi') . "';
                                </script>";
                            break;
                        default:
                            break;
                    }
                } else {
                    echo "<script>
                        alert('Login Gagal! Username dan Password Tidak Ditemukan!');window.location='" . site_url('teknisi-login') . "';
                    </script>";
                }
            }

        }
    }

    public function login_user()
    {
        check_already_login_user();
        $this->_rules();

        if ($this->form_validation->run() == false) {

            $data['judul'] = "Login";
            $this->load->view('home/template/Header', $data);
            $this->load->view('home/template/Navbar', $data);
            $this->load->view('login-user', $data);
            $this->load->view('home/template/Footer', $data);
        } else {
            $username = $this->input->post('username');
            $password = base64_encode(md5(sha1($this->input->post('password'))));
            $cek = $this->user_m->cek_login($username, $password);
            // echo '<pre>';
            // print_r($password);
            // echo '<pre>';

            if ($cek == false) {
                echo "<script>
                    alert('Login Gagal! Username dan Password Tidak Ditemukan!');window.location='" . site_url('auth-login') . "';
                </script>";
            } else {
                if (password_verify($password, $cek->password)) {
                    $this->session->set_userdata('user_id', $cek->user_id);
                    $this->session->set_userdata('id_desa', $cek->id_desa);
                    $this->session->set_userdata('id_upt', $cek->id_upt);
                    $this->session->set_userdata('id_opd', $cek->id_opd);
                    $this->session->set_userdata('username', $cek->username);
                    $this->session->set_userdata('level', $cek->level);
                    $berhasil = $this->session->userdata('username');
                    switch ($cek->level) {
                        case 1:
                            echo "<script>
                                alert('Login Berhasil! Selamat Datang $berhasil');
                                window.location='" . site_url('/') . "';
                                </script>";
                            break;
                        default:
                            break;
                    }
                } else {
                    echo "<script>
                        alert('Login Gagal! Username dan Password Tidak Ditemukan!');window.location='" . site_url('auth-login') . "';
                    </script>";
                }
            }
        }
    }

    public function logout_user()
    {
        $this->session->sess_destroy();
        echo "<script>
				alert('Logout Berhasil!');
				window.location='" . site_url('/') . "';
				</script>";
    }
   
    public function logout_teknisi()
    {
        $this->session->sess_destroy();
        echo "<script>
				alert('Logout Berhasil!');
				window.location='" . site_url('teknisi') . "';
				</script>";
    }
}
