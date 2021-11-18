<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Pdf{

    public function __construct(){
    }
	

		public function generarPdf(){
		$dompdf = new Dompdf(array('enable_remote' => true));
 		$html = ob_get_clean();
		$dompdf->loadHtml($html);
 

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream("document.pdf" , ['Attachment' => 0]);
		}

 


}