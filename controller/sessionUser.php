<?php
class sessionUser{
    private $model;
    public function __construct($sessionModelUser){
        $this->model=$sessionModelUser;
    }

    public function show($rolUsuario){
        switch ($rolUsuario) {
            case "1":
                header("Location: /mvc-gaucho-rocket/sistema");
                break;
            case "2":
                header("Location: /mvc-gaucho-rocket/logueado");
                break;
            default:
                header("Location: /mvc-gaucho-rocket/home");
                break;
        }
    }
    public function getRol($idUsuario){
        $resultado=$this->model->getUserRol($idUsuario);
        return $resultado[0]["id_rol"];
    }
    public function usuarioExiste($idUsuario){
        return $this->model->getUsuario($idUsuario);
    }

}