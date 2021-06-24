<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user_c extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == false ) {
            $data['judul'] = "Login User";
            $this->load->view('home/login_user', $data);
        }else {
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            
            $cek = $this->user_m->cek_login($username, $password);
            if($cek == false){
                $this->session->set_flashdata('err', 'Username atau Password Yang Anda Masukkan Salah!');
                redirect('login-user');
            }else{
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('level', $cek->level);
                $this->session->set_userdata('nama', $cek->nama);

                switch ($cek->level) {
                    case '1': redirect('home');
                        break;
                    default:
                        break;
                }
            }
        }

        
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

}
