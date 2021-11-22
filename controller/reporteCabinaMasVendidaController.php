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
   echo $this->printer->render("view/resultadoCabinaMasVendidaView.html");
    }
 
    public function reporteCabinaMasVendida(){
    
             $resultadoCabinaMasVendida["resultadoCabina"]= $this->reporteModel->reporteCabinaMasVendida();
        
        echo $this->printer->render("view/resultadoCabinaMasVendidaView.html",$resultadoCabinaMasVendida);
    }
    


}
