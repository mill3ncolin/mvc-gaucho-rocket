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
        $fecha1=$dataFecha["fecha1"];
        $fecha2=$dataFecha["fecha2"];
       
        $query="SELECT SUM(valor) AS Facturacion_Mensual FROM vuelo WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
         return $this->dataBase->query($query);
           }

           public function reporteCabinaMasVendida(){
         $query="SELECT CAB.nombre AS Cabina_mas_Vendida, COUNT(*) as CANTIDAD  FROM reserva RES JOIN cabina CAB ON RES.id_cabina=CAB.id_cabina
        WHERE estado ='abonado' GROUP BY  RES.id_cabina ORDER BY RES.id_cabina DESC;";
        return $this->dataBase->query($query);
           }

}
