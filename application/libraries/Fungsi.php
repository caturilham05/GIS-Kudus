<?php
    class Fungsi{
        protected $ci;
        function __construct(){
            $this->ci =& get_instance();
        }

        function user_login(){
            $this->ci->load->model('user_m');
            $user_id = $this->ci->session->userdata('userid');
            $user_data = $this->ci->user_m->get($user_id)->row();
            return $user_data;
        }

        function login_teknisi()
        {
            $this->ci->load->model('user_m');
            $teknisi_id = $this->ci->session->userdata('id_teknisi');
            $teknisi_data = $this->ci->user_m->get_teknisi($teknisi_id)->row();
            return $teknisi_data;
        }

        function PdfGenerator($html, $filename, $paper, $orientation){
            $dompdf = new Dompdf\Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper($paper, $orientation);
            $dompdf->render();
            $dompdf->stream($filename, array('Attachment' => 0));
        }
    }
?>