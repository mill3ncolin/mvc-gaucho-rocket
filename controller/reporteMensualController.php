<?php

class reporteMensualController{
    private $reporteModel;
    private $printer;
//    private $pdf;


	
	
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
    {
        array($dataFecha["dataFecha"]=array(
            'fecha1' =>$_GET["fecha1"],
            'fecha2' =>$_GET["fecha2"]));
      $this->reporteModel->reporteMensual($dataFecha);
      echo $this->printer->render("view/reporteMensualView.html");

    }

    public function pdf()
    {


        echo $this->printer->render("view/imprimirReporteMensualView.html");
        $this->pdf->generarPdf();


    }
	
}