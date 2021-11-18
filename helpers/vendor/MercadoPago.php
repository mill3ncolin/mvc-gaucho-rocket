<?php
// SDK de Mercado Pago
require_once 'autoload.php';

class MercadoPago{
	private $config;


    public function __construct(){
    }
	

		public function generarBoton($importe,$reserva){ 
		
			$config = $this->getConfig();
					
			$credenciales=$config["PROD_ACCESS_TOKEN"];
			 $web="http://localhost/mvc-gaucho-rocket";

			MercadoPago\SDK::setAccessToken("$credenciales");

			$preference = new MercadoPago\Preference();
			$id_reserva=$reserva[0]["id_reserva"];
			$item = new MercadoPago\Item();
			$item->title = "Cod. Reserva: ". $reserva[0]["codigo_reserva"];
			$item->quantity = 1;
			$item->unit_price = $importe;  
			$preference->items = array($item);

			   $preference->back_urls = array(
				"success" => "$web/MisReservas/notificar?id_reserva=$id_reserva&estado=2",
				"failure" => "$web/MisReservas/notificar?id_reserva=$id_reserva&estado=3",
				"pending" => "$web/MisReservas/notificar?id_reserva=$id_reserva&estado=4"
					); 
			  $preference->auto_return = "approved";
			  $preference->external_reference = $id_reserva;

			$preference->save();

			return $preference;
					}
					
					
					
				private  function getConfig(){
					if( is_null( $this->config ))
					$this->config = parse_ini_file("config/config.ini");
					return  $this->config;
				}
				



}
?>
