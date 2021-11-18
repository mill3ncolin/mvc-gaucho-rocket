<?php

class logueadoModel{
    private $dataBase;

    public function __construct($dataBase){
        $this->dataBase=$dataBase;
    }
    public function getDatosDelUsuario($id_usuario){
        return $this->dataBase->query("SELECT nombre, apellido, descripcion AS rol_usuario FROM usuario U JOIN rol_usuario Rol ON U.id_rol=Rol.id_rol WHERE id='".$id_usuario."'");
    }
}