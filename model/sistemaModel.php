<?php
class sistemaModel{
    private $dataBase;
    public function __construct($dataBase){
        $this->dataBase=$dataBase;
    }

    public function listaDeUsuarios(){
        return $this->dataBase->query("SELECT * FROM usuario JOIN rol_usuario ON usuario.id_rol=rol_usuario.id_rol ORDER BY id ASC");
    }

    public function cambiar_rol($id_usuario, $nuevo_rol){
        $this->dataBase->queryInsertUpdate("UPDATE usuario SET id_rol='".$nuevo_rol."'
        WHERE id='".$id_usuario."' AND codigo_alta IS NULL");
    }

    public function eliminarUsuario($id){
        $this->dataBase->query("DELETE FROM usuario WHERE id='".$id."' AND codigo_alta IS NULL");
    }
}