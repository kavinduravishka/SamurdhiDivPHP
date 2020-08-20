<?php 

require_once __DIR__ . '/vendor/autoload.php';

class MPDFAdaptee{
    public function createPDF($data){
        
        $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);
        $mpdf->autoScriptToLang = true;
        $mpdf->baseScript = 1;
        //$mpdf->autoVietnamese = true;
        //$mpdf->autoArabic = true;
        //$mpdf->allow_charset_conversion = true;
        $mpdf->autoLangToFont = true;
        //$mpdf->charset_in = 'iso-15924';
        $mpdf->WriteHTML($data);
        $mpdf->Output('report.pdf','D'); //D for download
    }
}