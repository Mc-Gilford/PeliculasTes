<?php
include_once "libs/iModel.php";
class Model{
    private $db;
    private $datos;
    
    public function __construct(){
        $this->db = Conectar::conexion();
        $this->datos = array();
    }
    /*function __contruct(){
        $this->db = new Database();
    }
    
    function query($query){
        return $this->db->connect()->query($query);
    }

    function prepare($query){
        return $this->db->connect()->prepare($query);
    }*/
}
?>