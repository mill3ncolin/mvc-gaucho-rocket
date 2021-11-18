<?php

class MyDatabase{
    private $connection;

    public function __construct($servername, $username, $password, $dbname){
        $this->connection = mysqli_connect($servername, $username,$password, $dbname);

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->connection);
    }

    public function query($sql){
	//	echo $sql;
        $databaseResult = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($databaseResult) <= 0)
            return [];

        return mysqli_fetch_all($databaseResult,MYSQLI_ASSOC);
    }
	
	    public function update($sql){
        $databaseResult = mysqli_query($this->connection, $sql);

             return [];

     }




    public function queryLogin($sql, $email, $clave){
        $comm=$this->connection->prepare($sql);
        $comm->bind_param("ss",$email,$clave);
        $comm->execute();
        return $comm->get_result()->fetch_assoc();
    }

    public function queryInsertUpdate($sql){
        $this->connection->query($sql);
    }
	
	
	    public function queryInsertUpdateConReturnId($sql){
        $comm=$this->connection->prepare($sql);
        $comm->execute();
	 
       $resultado= mysqli_insert_id($this->connection);

        return $resultado;
    }
	
	
	
}