<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        // $this->db->where('level != "0"');
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->select('user.*,
                            upt.nama_upt as join_nama_upt,
                            desa.desa as join_nama_desa,
                            opd.nama_opd as join_nama_opd,
                            opd.latitude as join_latitude,

        ');
        $this->db->from('user');
        $this->db->join('upt', 'upt.id_upt = user.id_upt');
        $this->db->join('desa', 'desa.id_desa = user.id_desa');
        $this->db->join('opd', 'opd.id_opd = user.id_opd');
        // $this->db->where('user.id_upt != "kosong"');
        // $this->db->where('user.id_desa != "kosong"');
        // $this->db->where('user.id_opd != "kosong"');

        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $this->db->order_by('user_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_login_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        // $this->db->where('username', $id);

        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $this->db->order_by('user_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_teknisi($id = 0)
    {
        $this->db->select('id_teknisi, name, username, no_telp, created, status, password');
        $this->db->from('teknisi');

        if ($id != 0) {
            $this->db->where('id_teknisi', $id);
        }
        $this->db->order_by('id_teknisi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function add($post = NULL)
    {
        $params = [
            'username'  => $post['username'],
            'password'  => password_hash(base64_encode(md5(sha1($post['password']))), PASSWORD_DEFAULT),
            'id_desa'   => $post['join_desa'],
            'id_upt'    => $post['join_upt'],
            'id_opd'    => $post['join_opd'],
            'no_telp'   => $post['no_telp'],
        ];
        $this->db->insert('user', $params);
    }

    public function add_teknisi($post = null)
    {
        $params = array(
            'username'  => $post['username'],
            'name'      => $post['name'],
            'password'  => password_hash(base64_encode(md5(sha1($post['password']))), PASSWORD_DEFAULT),
            'no_telp'   => $post['no_telp'],
            'status'    => 1
        );
        // echo '<pre>';
        // print_r($params);
        // echo '</pre>';
        $this->db->insert('teknisi', $params);
    }

    public function edit($post)
    {
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['id_desa'] = $post['join_desa'];
        $params['id_upt'] = $post['join_upt'];
        $params['id_opd'] = $post['join_opd'];
        $params['no_telp'] = $post['no_telp'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function edit_teknisi($post)
    {
        $params['username'] = $post['username'];
        $params['name'] = $post['name'];
        if (!empty($post['password'])) {
            $params['password'] = password_hash(base64_encode(md5(sha1($post['password']))), PASSWORD_DEFAULT);
        }
        $params['no_telp'] = $post['no_telp'];
        $params['status'] = $post['status'];
        $this->db->where('id_teknisi', $post['id_teknisi']);
        $this->db->update('teknisi', $params);
        print_r($params);
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->limit(1)
            ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function login_teknisi()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->limit(1)
            ->get('teknisi');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}
