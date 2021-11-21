<?php

class reporteController{
    private $reporteModel;
    private $printer;



	
	
    public function __construct($reporteModel,$printer){

        $this->reporteModel=$reporteModel;
        $this->printer=$printer;
    }
    public function show()
    {


        echo $this->printer->render("view/reporteView.html");

    }
	
	
	

	
}