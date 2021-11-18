<?php

class misReservasModel{
    private $dataBase;
    public function __construct($dataBase){
        $this->dataBase=$dataBase;
    }
    public function misReservas($idUsuario,$estado){
       return $this->dataBase->query("SELECT V.id_vuelo AS idVuelo, id_reserva,codigo_reserva, fecha,R.estado, Origen.nombre AS origen, Destino.nombre AS destino,
 A.asiento AS asiento, cabina.nombre AS cabina, V.hora AS hora, SA.nombre AS nombre_servicio,V.tipo_equipo
 FROM reserva R JOIN vuelo V ON V.id_vuelo=R.id_vuelo
					  JOIN destinos Origen ON V.id_origen=Origen.id_destino
                      JOIN destinos Destino ON V.id_destino=Destino.id_destino
                      JOIN cabina ON R.id_cabina=cabina.id_cabina
                      JOIN asiento A ON R.id_asiento=A.id_asiento
                      JOIN servicio_de_a_bordo SA ON R.id_servicio=SA.id_servicio
       
                      WHERE id_usuario='$idUsuario' and R.estado='$estado' ");
    }
	
	
	
	    public function miReserva($id_reserva){
       return $this->dataBase->query("SELECT V.id_vuelo AS idVuelo, id_reserva,codigo_reserva, fecha, Origen.nombre AS origen, Destino.nombre AS destino,nivel_vuelo,
	   (valor + cabina.valor_cabina + SA.valor_servicio) as valor,
 A.asiento AS asiento, cabina.nombre AS cabina, V.hora AS hora, SA.nombre AS nombre_servicio, V.tipo_equipo
 FROM reserva R JOIN vuelo V ON V.id_vuelo=R.id_vuelo
					  JOIN destinos Origen ON V.id_origen=Origen.id_destino
                      JOIN destinos Destino ON V.id_destino=Destino.id_destino
                      JOIN cabina ON R.id_cabina=cabina.id_cabina
                      JOIN asiento A ON R.id_asiento=A.id_asiento
                      JOIN servicio_de_a_bordo SA ON R.id_servicio=SA.id_servicio

                      WHERE id_reserva='$id_reserva';");
    }
	
	
	
		    public function misEsperas($idUsuario){
       return $this->dataBase->query("
	   SELECT V.id_vuelo AS idVuelo,
	   id_espera,
	   codigo_reserva,
	   fecha, 
	   Origen.nombre AS origen, 
	   Destino.nombre AS destino, V.tipo_equipo,
	   
	 cabina.nombre AS cabina, 
	 V.hora AS hora, 
	 SA.nombre AS nombre_servicio 
	 
	 FROM espera R 
	 JOIN vuelo V ON V.id_vuelo=R.id_vuelo
	 JOIN destinos Origen ON V.id_origen=Origen.id_destino
	 JOIN destinos Destino ON V.id_destino=Destino.id_destino
	 JOIN cabina ON R.id_cabina=cabina.id_cabina
	 JOIN servicio_de_a_bordo SA ON R.id_servicio=SA.id_servicio
 	 
	 WHERE id_usuario='$idUsuario'
	 
	 ");
 
    } 
	
	
		public function eliminarEspera($id_espera,$idUsuario){
        return $this->dataBase->query(" DELETE FROM `espera` 
		WHERE `id_espera` = '$id_espera' and `id_usuario` = '$idUsuario' ");
		} 
	
		
		public function actualizarMiReserva($id_reserva,$estadoDesc){
        return $this->dataBase->query("UPDATE `reserva` SET `estado` = '$estadoDesc' 
		WHERE `reserva`.`id_reserva` = $id_reserva  ");
		} 
	
	
	
}