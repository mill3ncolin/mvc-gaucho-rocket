<?php

class MedicoController{
    private $medicoModel;
    private $printer;
    private $email;
	
    public function __construct($email,$medicoModel,$printer){
		$this->email = $email;
		$this->medicoModel = $medicoModel;
        $this->printer=$printer;
    }

    public function show(){

        if(isset ($_SESSION["id_usuario"])){
            $turno=$this->medicoModel->datosTurnoActual($_SESSION["id_usuario"]);
            if ($turno!=[] AND $turno[0]["estado"]!="Baja"){
                if ($turno[0]["estado"]=="En espera"){
                    //Realizar chequeo
                    $this->realizarChequeo($_SESSION["id_usuario"]);
                }elseif ($turno[0]["estado"]=="Chequeo realizado"){
                    //Mostrar vista de chequeo realizado con el codigo de viajero=columna 'nivel' de la tabla turnos
                    $this->chequeoRealizado();
                }
            }else{
                //solicitar turno
                $this->solicitarTurno();
            }
        }
        else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }
   
   
   public function turno(){
	   /*este metodo se remplazo por solicitarTurno() */
		$centrosMedicos = $this->medicoModel->dameCentros();
		$data["centrosMedicos"] = $centrosMedicos;
		$data["mensaje"] = "";
		
         echo $this->printer->render("view/turnoView.html", $data);
    }
	
	
	   public function resultadoChequeo(){
		$resultado = $this->medicoModel->dameTurno($_GET['id_turno']);
		$data["resultado"] = $resultado;
		$data["mensaje"] = "";
		
         echo $this->printer->render("view/resultadoView.html", $data);
    }
	
	
	
	    public function procesarTurno()
    {
		$idCentro=$_POST['id_centro'];
         $data = array(
            'id_centro' => $idCentro,
            'fecha' => $_POST['fecha'], 
            'id_usuario' => $_SESSION["id_usuario"], 
        );
		$hoy=date("Y-m-d");
		if($_POST['fecha']>$hoy){
 			
	
 
        $turnosDisponibles=$this->medicoModel->validarTurnos($idCentro);
		$cantidadTurnos=$turnosDisponibles[0]["turnos"];
		if($cantidadTurnos>0){
			
			
      //  $turnosDisponibles=$this->medicoModel->actualizarTurnos($idCentro,$cantidadTurnos);


        $id_turno=$this->medicoModel->crearTurno($data);
		$data["mensaje"] = "";
	 
		$data["id_turno"] = $id_turno;


$body="<html><body>Por favor ingrese al siguiente link para poder confirmar su turno medico:  
<a href=\"http://localhost/mvc-gaucho-rocket/medico/confirmarTurno?id_turno=$id_turno\">Confirmar Turno</a></body></html>";

$asunto="Validar Email Turno";

		$this->email->enviarEmail($_SESSION["email"],$body,$asunto);
		
		
         echo $this->printer->render("view/linkEmailTurnoView.html", $data);
		 
				}else{
							$centrosMedicos = $this->medicoModel->dameCentros();
							$data["centrosMedicos"] = $centrosMedicos;
							$data["mensaje"] = "El centro medico seleccionado no cuenta con turnos disponibles";
							
							 echo $this->printer->render("view/turnoView.html", $data);
				}
		}
		else{

		$centrosMedicos = $this->medicoModel->dameCentros();
		$data["centrosMedicos"] = $centrosMedicos;
		$data["mensaje"] = "Debe ingresar una fecha mayor a la actual";
		
         echo $this->printer->render("view/turnoView.html", $data);
		 
		 

		}
		
		
    }
	
	
		
	    public function confirmarTurno()
    {
		$id_turno=$_GET['id_turno'] ;
         $data = array(
            'id_turno' => $id_turno
        );

        $turno=$this->medicoModel->dameTurno($id_turno);
		$data["mensaje"] = "Turno realizado con éxito.";
		$data["turno"] =  $turno;
		$data["nombre"] = $_SESSION["nombre"];
		$data["apellido"] = $_SESSION["apellido"];
		$data["email"] = $_SESSION["email"];
		
         echo $this->printer->render("view/turnoConfirmadoView.html", $data);

    }
	
	



    public function solicitarTurno(){

	$centrosMedicos = $this->medicoModel->dameCentros();
		$data["centrosMedicos"] = $centrosMedicos;
		$data["mensaje"] = "";

		$data=$this->dameDatosUsuario($data);
         echo $this->printer->render("view/turnoView.html", $data);

	}


	function dameDatosUsuario($data){
		$data["nombre"] = $_SESSION["nombre"];
		$data["apellido"] = $_SESSION["apellido"];
		$data["email"] = $_SESSION["email"];
		return $data;
	}

    public function realizarChequeo($idUsuario){
        $turno=$this->medicoModel->datosTurnoActual($idUsuario);
        $data["turno"] =  $turno;
        $data["nombre"] = $_SESSION["nombre"];
        $data["apellido"] = $_SESSION["apellido"];
        $data["email"] = $_SESSION["email"];

        echo $this->printer->render("view/turnoConfirmadoView.html", $data);
    }
    public function procesarChequeoMedico(){
        if (isset($_POST["idTurno"])){
            $this->medicoModel->actualizarEstado($_POST["idTurno"], "Chequeo realizado");
            $this->medicoModel->asignarNivel($_POST["idTurno"], $this->asignarNivel());
            $data["id_turno"]=$_POST["idTurno"];
            echo $this->printer->render("view/linkEmailResultadoView.html", $data);
        }
    }
    public function resultadoMedico(){
        $this->chequeoRealizado();
    }

    public function chequeoRealizado(){
        if (isset($_SESSION["id_usuario"])){
            $data=[];
            $data=$this->dameDatosUsuario($data);
            $data["turno"]=$this->medicoModel->datosTurnoActual($_SESSION["id_usuario"]);
            $data["mensaje"]="Chequeo medico realizado con exito!";

            echo $this->printer->render("view/resultadoConfirmadoView.html", $data);
        }
    }

    public function bajaTurno(){
        if (isset($_POST["idTurno"])){
            $this->medicoModel->actualizarEstado($_POST["idTurno"], "Baja");
            header("Location: /mvc-gaucho-rocket/login");
        }
    }

    public function asignarNivel(){
        return rand(1,3);
    }
}