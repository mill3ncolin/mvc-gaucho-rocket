<?php

require_once "phpqrcode/qrlib.php";
class QR{

    public function __construct(){
    }
	
	
			public function generarQR($idReserva){
			QRcode::png("IdRESERVA:$idReserva","public/qr/qr".$idReserva.".png"); 
			}
			
			
			
}


?>
