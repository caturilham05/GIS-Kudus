<?php defined('BASEPATH') or exit('No direct script access allowed');

class Aduan_m extends CI_Model
{
    public function get_maps($id = null)
    {
        $this->db->select('user.*, upt.nama_upt as join_nama_upt,
                            desa.desa as join_nama_desa,
                            opd.nama_opd as join_nama_opd,
                            kecamatan.kecamatan as join_nama_kecamatan
        ');
        $this->db->from('detail_pengaduan');
        $this->db->join('upt', 'upt.id_upt = detail_pengaduan.id_upt');
        $this->db->join('desa', 'desa.id_desa = detail_pengaduan.id_desa');
        $this->db->join('opd', 'opd.id_opd = detail_pengaduan.id_opd');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = detail_pengaduan.id_kecamatan');
        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getAll($id = null)
    {
        $this->db->select('detail_pengaduan.*,
        upt.nama_upt as join_nama_upt,
        upt.latitude as join_latitude_upt,
        upt.longitude as join_longitude_upt,
        desa.desa as join_nama_desa,
        desa.latitude as join_latitude_desa,
        desa.longitude as join_longitude_desa,
        opd.nama_opd as join_nama_opd,
        opd.latitude as join_latitude_opd,
        opd.longitude as join_longitude_opd,
        ');
        $this->db->from('detail_pengaduan');
        $this->db->join('upt', 'upt.id_upt = detail_pengaduan.id_upt');
        $this->db->join('desa', 'desa.id_desa = detail_pengaduan.id_desa');
        $this->db->join('opd', 'opd.id_opd = detail_pengaduan.id_opd');
        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getAduan($id = null)
    {
        $get_id = $this->session->userdata('user_id');
        $this->db->select('detail_pengaduan.*,
        upt.nama_upt as join_nama_upt,
        upt.latitude as join_latitude_upt,
        upt.longitude as join_longitude_upt,
        desa.desa as join_nama_desa,
        desa.latitude as join_latitude_desa,
        desa.longitude as join_longitude_desa,
        opd.nama_opd as join_nama_opd,
        opd.latitude as join_latitude_opd,
        opd.longitude as join_longitude_opd,
        ');
        $this->db->from('detail_pengaduan');
        $this->db->join('upt', 'upt.id_upt = detail_pengaduan.id_upt');
        $this->db->join('desa', 'desa.id_desa = detail_pengaduan.id_desa');
        $this->db->join('opd', 'opd.id_opd = detail_pengaduan.id_opd');
        $this->db->where('detail_pengaduan.user_id =', $get_id);

        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('detail_pengaduan');
        $this->db->where('status = "belum diatasi"');

        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function get_data_aduan($id = null)
    {
        $this->db->from('detail_pengaduan');
        $this->db->where('status = "selesai diatasi"');

        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'user_id' => $post['user_id'],
            'id_desa' => $post['id_desa'],
            'id_upt' => $post['id_upt'],
            'id_opd' => $post['id_opd'],
            'nama_pelapor' => $post['nama_pelapor'],
            'tgl_aduan' => $post['tgl_aduan'],
            'isi_aduan' => $post['isi_aduan'],
            'gambar' => $post['gambar'],
        ];
        // var_dump($params);die();

        $this->db->insert('detail_pengaduan', $params);
    }

    public function edit($post = NULL)
    {
        $get_level = $this->session->userdata('level');
        $params = array();
        if ($get_level == 1) {
            $params = array(
                'status' => 'cancel',
                'isi_aduan' => @$post['isi_aduan']
            );
        } else {
            $params = array(
                'status' => @$post['status'],
            );
        }
        $this->db->where('id_pengaduan', @$post['id_pengaduan']);
        $this->db->update('detail_pengaduan', $params);
    }

    public function gambar($id = null)
    {
        $this->db->from('detail_pengaduan');
        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_marker($id = null)
    {
        $this->db->select('detail_pengaduan.*,
                            upt.nama_upt as join_nama_upt,
                            upt.latitude as join_latitude_upt,
                            upt.longitude as join_longitude_upt,
                            desa.desa as join_nama_desa,
                            desa.latitude as join_latitude_desa,
                            desa.longitude as join_longitude_desa,
                            opd.nama_opd as join_nama_opd,
                            opd.latitude as join_latitude_opd,
                            opd.longitude as join_longitude_opd,
        ');
        $this->db->from('detail_pengaduan');
        $this->db->join('upt', 'upt.id_upt = detail_pengaduan.id_upt');
        $this->db->join('desa', 'desa.id_desa = detail_pengaduan.id_desa');
        $this->db->join('opd', 'opd.id_opd = detail_pengaduan.id_opd');
        $this->db->where('status = "belum diatasi"');
        if ($id != null) {
            $this->db->where('id_pengaduan', $id);
        }
        $this->db->order_by('id_pengaduan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function taken_teknisi($id_pengaduan_teknisi = NULL)
    {
        $this->db->select('proses_teknisi.id_pengaduan,
                            proses_teknisi.id_teknisi,
                            detail_pengaduan.is_taken_teknisi AS join_is_taken_teknisi');
        $this->db->from('proses_teknisi');
        $this->db->join('detail_pengaduan', 'detail_pengaduan.id_pengaduan = proses_teknisi.id_pengaduan');
        if ($id_pengaduan_teknisi != NULL) {
            $this->db->where('id_pengaduan_teknisi', $id_pengaduan_teknisi);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add_aduan_teknisi($post)
    {
        $params = [
            'id_pengaduan' => $post['id_pengaduan'],
            'id_desa' => $post['id_desa'],
            'id_upt' => $post['id_upt'],
            'id_opd' => $post['id_opd'],
            'id_teknisi' => $post['id_teknisi'],
            'nama_pelapor' => $post['nama_pelapor'],
            'status' => $post['status'],
        ];
        
        $this->db->insert('proses_teknisi', $params);
    }

    public function edit_is_taken_teknisi($post)
    {
        $edit_is_taken_teknisi = [
            'is_taken_teknisi' => 1
        ];
        $this->db->where('id_pengaduan', @$post['id_pengaduan']);
        $this->db->update('detail_pengaduan', $edit_is_taken_teknisi);
    }
}
