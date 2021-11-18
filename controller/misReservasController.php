<?php

class misReservasController{
    private $misReservasModel;
    private $printer;
    private $pdf;
    private $mercadoPago;
    private $qr;
	
	
    public function __construct($qr,$mercadoPago,$pdf,$misReservasModel, $printer){
        $this->qr=$qr;
        $this->mercadoPago=$mercadoPago;
        $this->pdf=$pdf;
        $this->misReservasModel=$misReservasModel;
        $this->printer=$printer;
    }
    public function show(){
        if (isset($_SESSION["id_usuario"])){
            $data["reservas"]=$this->misReservasModel->misReservas($_SESSION["id_usuario"],"Activo");
            echo $this->printer->render("view/misReservasView.html", $data);
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
	
	
	    public function pdf(){
			$id_reserva=$_GET["id_reserva"];
        if (isset($_SESSION["id_usuario"])){
            $data["reservas"]=$this->misReservasModel->miReserva($id_reserva);
             
			echo $this->printer->render("view/imprimirComprobanteView.html", $data);
			 $this->pdf->generarPdf();
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
		}

	
	
	
	
	    public function espera(){
        if (isset($_SESSION["id_usuario"])){
            $data["esperas"]=$this->misReservasModel->misEsperas($_SESSION["id_usuario"]);
            echo $this->printer->render("view/listaEsperaView.html", $data);
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
	
	
		    public function eliminarEspera(){
				$id_espera=$_GET["id_espera"];
				
        if (isset($_SESSION["id_usuario"])){
          $this->misReservasModel->eliminarEspera($id_espera,$_SESSION["id_usuario"]);
            header("Location: /mvc-gaucho-rocket/MisReservas/espera");
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
	
	
	
	
	 public function abonarConMercadoPago(){
	

		$id_reserva=$_GET["id_reserva"];
				
        if (isset($_SESSION["id_usuario"])){
            $data["reserva"]=$this->misReservasModel->miReserva($id_reserva);
			$importe=$data["reserva"][0]["valor"];
			$mercadoPago=$this->mercadoPago->generarBoton($importe,$data["reserva"]);
 			$data["mercadoPago"]=$mercadoPago->id;

              echo $this->printer->render("view/abonarMercadoPagoView.html", $data);


        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
	
	
	
		public function notificar(){

		$id_reserva=$_GET["id_reserva"];
		$estado=$_GET["estado"];
		$estadoDesc="";
				 
        if (isset($_SESSION["id_usuario"])){
			
			if($estado=="2"){
			$estadoDesc="Abonado"; 
			$data["reserva"]=$this->misReservasModel->actualizarMiReserva($id_reserva,$estadoDesc);
			header("Location: /mvc-gaucho-rocket/MisReservas/abonadas");
			}
 
 
			if($estado=="4"){
			$estadoDesc="En Proceso";
			$data["reserva"]=$this->misReservasModel->actualizarMiReserva($id_reserva,$estadoDesc);
			header("Location: /mvc-gaucho-rocket/MisReservas/enProceso");		
			} 
			
	
		 if($estado=="3"){
			header("Location: /mvc-gaucho-rocket/MisReservas");			
		 }
		 
			}	



		  else{
				header("Location: /mvc-gaucho-rocket/login");
			}
    }
	
	
	

	
	
	    public function abonadas(){
 
        if (isset($_SESSION["id_usuario"])){
            $data["reservas"]=$this->misReservasModel->misReservas($_SESSION["id_usuario"],"Abonado");
            echo $this->printer->render("view/misReservasAbonadasView.html", $data);
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
		}
	
		
	    public function enProceso(){
 
        if (isset($_SESSION["id_usuario"])){
            $data["reservas"]=$this->misReservasModel->misReservas($_SESSION["id_usuario"],"En Proceso");
             echo $this->printer->render("view/misReservasEnProcesoView.html", $data);
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
	
	
	
	
	
		
		 public function BoardingPass(){
		$id_reserva=$_GET["id_reserva"];


        if (isset($_SESSION["id_usuario"])){
			$this->qr->generarQr($id_reserva);
			ob_get_clean();
			ob_start(); 
            $data["reservas"]=$this->misReservasModel->miReserva($id_reserva);
			$data["imagen"]="http://localhost/mvc-gaucho-rocket/public/qr/qr$id_reserva.png";
			echo $this->printer->render("view/imprimirBoardingPassView.html", $data);
			$this->pdf->generarPdf();
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
		}
		
		
	
}