<?php

class loginController{
    private $loginModel;
    private $printer;

    public function __construct($loginModel, $printer){
        $this->printer=$printer;
        $this->loginModel=$loginModel;
    }
    public function show(){
        $data = [];
        if(!isset ($_SESSION["id_usuario"])) {
            if (isset($_GET["msg"])) {$data["msg"] = $_GET["msg"];};
            if (isset($_GET["msgRegistro"])) {$data["msgRegistro"] = $_GET["msgRegistro"];};
            echo $this->printer->render("view/loginView.html", $data);
        }else{$this->showSesion($_SESSION["id_usuario"]);}
    }

    public function showSesion($id){
        $id_rol=$this->loginModel->getUserRol($id);
        if ($id_rol==1){
            header("Location: /mvc-gaucho-rocket/sistema");
        }
        if ($id_rol==2){
            header("Location: /mvc-gaucho-rocket/logueado");
        }
    }

    public function procesarLogin(){
        $email = isset($_POST["email"]) ? $_POST["email"] : "";$clave = isset($_POST["clave"]) ? $_POST["clave"] : "";
        $resultado=$this->loginModel->iniciarSesion($email, md5($clave));
        if ($resultado!=[]){
            $_SESSION["id_usuario"]=$resultado["id"];
            $_SESSION["nombre"]=$resultado["nombre"];
            $_SESSION["apellido"]=$resultado["apellido"];
            $_SESSION["email"]=$resultado["email"];
            $this->showSesion($resultado["id"]);
        }else{
            header("Location: /mvc-gaucho-rocket/login?msg=El email o contraseña es incorrecto!");
        }
    }
}