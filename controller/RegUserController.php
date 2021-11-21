<?php



class RegUserController
{
    private $registroModel;
    private $printer;

    public function __construct($registroModel,$printer){
        $this->registroModel = $registroModel;
        $this->printer=$printer;
    }

    public function show(){
        echo $this->printer->render("view/registroView.html");
    }

    public function validar(){
        $data["codigo_alta"] = $_GET["codigo_alta"];
        echo $this->printer->render("view/validarView.html", $data);
    }



    public function procesarFormulario(){
        $data=array(
                'nombre'=>$_POST['usuario_nombre_reg'],
                'apellido'=>$_POST['usuario_apellido_reg'],
                'email'=>$_POST['usuario_email_reg'],
                'clave'=>md5($_POST['usuario_clave_1_reg']),
                'codigo_alta'=>md5($_POST['usuario_clave_2_reg'])
        );

        $this->registroModel->registrarUserModel($data);

        echo $this->printer->render("view/verificacionView.html", $data);


        }


}

