<?php
class cerrarSesion{
    public function show(){
        session_destroy();
        header("Location: /mvc-gaucho-rocket/home");
    }
}