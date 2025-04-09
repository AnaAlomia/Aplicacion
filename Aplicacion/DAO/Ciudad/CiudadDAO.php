<?php
include_once '../Lib/Config/conexionSqli.php';
 
class CiudadDAO extends Connection {
    private static $instance = NULL;
    public static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new CiudadDAO();
        return self::$instance;
    }
    public function getAll(){
        $sql = "SELECT * FROM t005ciudad";
        $result = $this->execute($sql);
        return $result;
    }

    public function add($id,$name,$depar){
        $rs="";
        try {
            $sql = "insert into t005ciudad(f005id,f005nombre,f006idDepto) values ('".$id."','".$name."'.$depar.')";
            $result = $this->execute($sql);
            $rs=1;
        }catch (PDOException $exc) {
            die('Error Add() CiudadDAO:<br/>' . $exc->getMessage());
            $rs=0;
        }
        return $rs;
    }
}