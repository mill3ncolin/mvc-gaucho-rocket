<?php

class RegUserModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }
    public function registrarUserModel($data){
        $nombre=$data['nombre'];
        $apellido=$data['apellido'];
        $email=$data['email'];
        $clave=$data['clave'];
        $codigo_alta=$data['codigo_alta'];

        $this->database->queryInsertUpdate("INSERT INTO usuario
        (nombre,apellido,email,id_rol,clave,codigo_alta)VALUES
        ('".$nombre."','".$apellido."','".$email."',2,'".$clave."','".$codigo_alta."')");
    }

}



