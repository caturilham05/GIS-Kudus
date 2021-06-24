<?php

require_once('assets/dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class Mypdf
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate( $view, $data = array(), $filename = 'Data-Laporan-Pengaduan', $paper = 'A4', $orientation = 'portrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->load_html($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        ob_clean();
        $dompdf->stream($filename, array("Attachment" => FALSE));
    }
}
