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
	
	
	    public function dameClientes(){
         $query="SELECT * FROM `usuario` where id>1";
        return $this->dataBase->query($query);
	}


    public function filtradoPorCliente($idCliente)
    {
        
        $query="SELECT SUM(vuelo.valor) AS valor , usuario.nombre,usuario.apellido,usuario.email,usuario.id as id_usuario
		FROM reserva
		left join vuelo on vuelo.id_vuelo=reserva.id_vuelo
		left join usuario on reserva.id_usuario=usuario.id
		
		where reserva.id_usuario='$idCliente' and reserva.estado='Abonado' ";
         return $this->dataBase->query($query);
	}

}
