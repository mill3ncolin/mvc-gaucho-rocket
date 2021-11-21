<?php
class modelSessionUser{
    private $database;
    public function __construct($database){
        $this->database=$database;
    }

    public function getUserRol($idUsuario){
        return $this->database->query("SELECT id_rol FROM usuario WHERE id='".$idUsuario."'");
    }
    public function usuarioExiste($idUsuario){
        return $this->database->query("SELECT * FROM usuario WHERE id='".$idUsuario."'");
    }

}