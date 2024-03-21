<?php
class ConectarDB{
    private $server = "mysql:localhost; dbname=agenda ";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO:: ATTR_DEFAULT_FETCH_MODE=>PDO
    ::FETCH_ASSOC);
    protected $conn;
    public function open(){
        try{
            $thus -> conn = new PDO($this-> server, $this->user, $this->pass, $this->options);
            return $this->conn;
        }catch (Exception $e){
            echo "Ocurrio un error :".$e->getMesage();
        }
    }


}

?>