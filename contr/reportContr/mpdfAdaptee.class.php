<?php 

require_once __DIR__ . '/vendor/autoload.php';

class MPDFAdaptee{
    public function createPDF($data){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($data);
        $mpdf->Output('report.pdf','D'); //D for download
    }
}