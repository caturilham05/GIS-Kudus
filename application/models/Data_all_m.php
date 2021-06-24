<?php  

    class Data_all_m extends CI_Model
    {   
        // table desa
        public function get($id = null){
            $this->db->from('desa');
            if($id != null){
                $this->db->where('id_desa', $id);
            }
            $query = $this->db->get();
            return $query;
        }

        // table opd
        public function get_opd($id = null){
            $this->db->from('opd');
            if ($id != null) {
                $this->db->where('id_opd', $id);
            }
            $query = $this->db->get();
            return $query;
        }

        // table upt
        public function get_upt($id = null){
            $this->db->from('upt');
            if ($id != null) {
                $this->db->where('id_upt', $id);
            }
            // $this->db->limit(10);
            $query = $this->db->get();
            return $query;
        }
       
        // table kecamatan
        public function get_kecamatan($id = null){
            $this->db->from('kecamatan');
            if ($id != null) {
                $this->db->where('id_kecamatan', $id);
            }
            // $this->db->limit(10);
            $query = $this->db->get();
            return $query;
        }

        
        public function get_titik($id = null){
            $this->db->from('desa');
            if ($id != null) {
                $this->db->where('id_desa', $id);
            }
            $this->db->limit(60);
            $this->db->order_by('id_desa');
            $query = $this->db->get();
            return $query;
        }

        
    }
