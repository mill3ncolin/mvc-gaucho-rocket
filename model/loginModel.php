<?php
class loginModel{
   private $dataBase;

    public function __construct($dataBase){
        $this->dataBase=$dataBase;
    }
    public function iniciarSesion($email, $clave){
        $consulta="SELECT * FROM usuario WHERE email=? AND clave=?";
        return $this->dataBase->queryLogin($consulta, $email, $clave);
    }
    public function getUserRol($idUsuario){
        $data=$this->dataBase->query("SELECT id_rol FROM usuario WHERE id='".$idUsuario."'");
        return$data[0]["id_rol"];
    }
}