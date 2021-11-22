<?php

class reporteMensualController{
    private $reporteModel;
    private $printer;
    private $pdf;

    public function __construct($reporteModel,$printer){ //,$pdf

        $this->reporteModel=$reporteModel;
        $this->printer=$printer;
        //$this->pdf=$pdf;
    }
    public function show()
    {
   echo $this->printer->render("view/reporteMensualView.html");
    }
 
    public function reporteMensual()
    {      $dataFecha=array(
        'fecha1'=>$_GET["fecha1"],
          'fecha2'=>$_GET["fecha2"]);
             $resultadoMensual["resultadoFecha"]= $this->reporteModel->reporteMensual($dataFecha);
        
        echo $this->printer->render("view/resultadoMensualView.html",$resultadoMensual);
    }


public function pdf() {
    $dataFecha=array(
        'fecha1'=>$_GET["fecha1"],
      'fecha2'=>$_GET["fecha2"]);
         $resultadoMensual["resultadoFecha"]= $this->reporteModel->reporteMensual($dataFecha);
     echo $this->printer->render("view/imprimirReporteMensualView.html",$resultadoMensual);
        $this->pdf->generarPdf();

    } 
}
