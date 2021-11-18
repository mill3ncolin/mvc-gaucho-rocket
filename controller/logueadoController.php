<?php
class logueadoController{

    private $printer;
    private $logueadoModel;

    public function __construct($logueadoModel, $printer){
        $this->printer=$printer;
        $this->logueadoModel=$logueadoModel;
    }
    public function show(){
        if(isset ($_SESSION["id_usuario"])){
            $data["resultado"]=$this->logueadoModel->getDatosDelUsuario($_SESSION["id_usuario"]);
            echo $this->printer->render("view/logueadoView.html", $data);
        }else{
            header("Location: /login");
        }
    }
}