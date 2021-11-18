<?php
class Configuration{

    private $config;

	    public  function createReservaController(){
        require_once("controller/ReservaController.php");
        return new ReservaController($this->createMedicoModel(),$this->createReservaModel(),$this->createPrinter());
    }

    public  function createMisreservasController(){
        require_once("controller/misReservasController.php");
        return new misReservasController($this->createQR(),$this->createMercadoPago(),$this->createPdf(),$this->createMisReservasModel(),$this->createPrinter());
    }

	public  function createMedicoController(){
        require_once("controller/MedicoController.php");
        return new MedicoController($this->createEmail(),$this->createMedicoModel(),$this->createPrinter());
    }


	public  function createRegistroController(){
        require_once("controller/RegistroController.php");
        return new RegistroController($this->createEmail(),$this->createRegistroModel(),$this->createPrinter());
    }

    public function createHomeController(){
        require_once("controller/homeController.php");
        return new homeController($this->createPrinter());
    }

    public function createLoginController(){
        require_once("controller/loginController.php");
        return new loginController($this->createLoginModel(), $this->createPrinter());
    }

    public function createLogueadoController(){
        require_once("controller/logueadoController.php");
        return new logueadoController($this->createLogueadoModel(), $this->createPrinter());
    }

    public function createSistemaController(){
        require_once("controller/sistemaController.php");
        return new sistemaController($this->createSistemaModel(), $this->createPrinter());
    }

    public function createCerrarSesionController(){
        require_once("controller/cerrarSesion.php");
        return new cerrarSesion();
    }


    private  function createMedicoModel(){
        require_once("model/MedicoModel.php");
        $database = $this->getDatabase();
        return new MedicoModel($database);
    }
	
	
	    private  function createReservaModel(){
        require_once("model/ReservaModel.php");
        $database = $this->getDatabase();
        return new ReservaModel($database);
    }

    private  function createMisReservasModel(){
        require_once("model/misReservasModel.php");
        $database = $this->getDatabase();
        return new misReservasModel($database);
    }
	

    private  function createPdf(){
        require_once("helpers/pdf/Pdf.php");
         return new Pdf();
    }
	
	    private  function createMercadoPago(){
        require_once("helpers/vendor/MercadoPago.php");
         return new MercadoPago();
    }
 
 
 	    private  function createQR(){
        require_once("helpers/qr/QR.php");
         return new QR();
    }
 

    private  function createRegistroModel(){
        require_once("model/RegistroModel.php");
        $database = $this->getDatabase();
        return new RegistroModel($database);
    }
	
	
	   private  function createEmail(){
        require_once("helpers/Email/Email.php");
        return new Email();
    }
	
	

    public function createLoginModel(){
        require_once("model/loginModel.php");
        $database=$this->getDatabase();
        return new loginModel($database);
    }

    public function createLogueadoModel(){
        require_once("model/logueadoModel.php");
        $database=$this->getDatabase();
        return new logueadoModel($database);
    }

    public function createSistemaModel(){
        require_once("model/sistemaModel.php");
        $database=$this->getDatabase();
        return new sistemaModel($database);
    }

    private  function getDatabase(){
        require_once("helpers/MyDatabase.php");
        $config = $this->getConfig();
        return new MyDatabase($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }

    private  function getConfig(){
        if( is_null( $this->config ))
            $this->config = parse_ini_file("config/config.ini");

        return  $this->config;
    }

    private function getLogger(){
        require_once("helpers/Logger.php");
        return new Logger();
    }

    public function createRouter($defaultController, $defaultAction){
        include_once("helpers/Router.php");
        return new Router($this,$defaultController,$defaultAction);
    }

    private function createPrinter(){
        require_once ('third-party/mustache/src/Mustache/Autoloader.php');
        require_once("helpers/MustachePrinter.php");
        return new MustachePrinter("view/partials");
    }

}