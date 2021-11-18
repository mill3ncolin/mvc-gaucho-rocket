<?php
class sistemaController{
    private $printer;
    private $sistemaModel;

    public function __construct($sistemaModel, $printer){
        $this->printer=$printer;
        $this->sistemaModel=$sistemaModel;
    }

    public function show(){
        if(isset ($_SESSION["id_usuario"])){
            $data["resultado"]=$this->sistemaModel->listaDeUsuarios();
            echo $this->printer->render("view/sistemaView.html", $data);
        }else{
            header("Location: /mvc-gaucho-rocket/login");
        }
    }

    public function cambiarRolDelUsuario(){
        if (isset($_POST["rol_usuario"]) AND isset($_POST["id_usuario"])){
            $this->sistemaModel->cambiar_rol($_POST["id_usuario"], $_POST["rol_usuario"]);
            header("Location: /mvc-gaucho-rocket/sistema");
        }
    }

    public function eliminarUsuario(){
        $this->sistemaModel->eliminarUsuario($_POST["id_usuario"]);
        header("Location: /mvc-gaucho-rocket/sistema");
    }
}