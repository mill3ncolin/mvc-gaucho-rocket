<?php

class reporteModel
{
    private $dataBase;

    public function __construct($dataBase)
    {
        $this->dataBase = $dataBase;
    }
    public function reporteMensual($dataFecha)
    {
        $fecha1=$dataFecha['fecha1'];
        $fecha2=$dataFecha['fecha2'];
        $query="SELECT SUM(valor) AS Facturacion_Mensual FROM vuelo WHERE fecha BETWEEN '".$fecha1."' AND '".$fecha2."'";
        return $this->dataBase->query($query);

    }

}


