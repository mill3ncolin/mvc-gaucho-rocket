<?php

class reporteMensualController{
    private $reporteModel;
    private $printer;
    private $pdf;

    public function __construct($reporteModel,$printer,$pdf){ 

        $this->reporteModel=$reporteModel;
        $this->printer=$printer;
        $this->pdf=$pdf;
    }
    public function show()
    {
		
		
		
   echo $this->printer->render("view/reporteMensualView.html");
    }
 
    public function reporteMensual()
    {     
 $dataFechaArray=array(
        'fecha1'=>$_GET["fecha1"],
          'fecha2'=>$_GET["fecha2"]);
        $resultadoMensual["resultadoFecha"]= $this->reporteModel->reporteMensual($dataFechaArray);
        $resultadoMensual["fecha1"]= $_GET["fecha1"];
        $resultadoMensual["fecha2"]=$_GET["fecha2"];
 		
        echo $this->printer->render("view/resultadoMensualView.html",$resultadoMensual);
    }


public function pdf() {
    $dataFecha=array(
        'fecha1'=>$_GET["fecha1"],
      'fecha2'=>$_GET["fecha2"]);
         $resultadoMensual["resultadoFecha"]= $this->reporteModel->reporteMensual($dataFecha);
		         $resultadoMensual["fecha1"]= $_GET["fecha1"];
        $resultadoMensual["fecha2"]=$_GET["fecha2"];
		
     echo $this->printer->render("view/imprimirReporteMensualView.html",$resultadoMensual);
        $this->pdf->generarPdf();

    } 
	
	
	public function reportePorCliente()
    {
	$clientes["clientes"]= $this->reporteModel->dameClientes();

   echo $this->printer->render("view/reporteClienteView.html",$clientes);
    }
	
	
		public function resultadoCliente()
    {
		
		$idCliente=$_GET["id_cliente"];
        $resultadoMensual["resultadoCLiente"]= $this->reporteModel->filtradoPorCliente($idCliente);

		echo $this->printer->render("view/resultadoClienteView.html",$resultadoMensual);
		}
		
		
		
			
		public function resultadoClientePdf()
    {
		
		$idCliente=$_GET["id_usuario"];
        $resultadoMensual["resultadoCLiente"]= $this->reporteModel->filtradoPorCliente($idCliente);

		echo $this->printer->render("view/imprimirReporteClienteView.html",$resultadoMensual);
		$this->pdf->generarPdf();

		}
	
	
}
