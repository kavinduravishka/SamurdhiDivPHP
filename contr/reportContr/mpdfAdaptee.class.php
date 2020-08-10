<?php 

require_once __DIR__ . '/vendor/autoload.php';

class MPDFAdaptee{
    public function createPDF($data){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->allow_charset_conversion = true;
        //$mpdf->charset_in = 'iso-8859-4';
        $mpdf->charset_in='Windows-1250';
        $mpdf->WriteHTML($data);
        $mpdf->Output('report.pdf','D'); //D for download
    }
}