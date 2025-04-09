<?php
include_once '../Lib/Config/conexionSqli.php';
 
class DepartamentoDAO extends Connection {
    private static $instance = NULL;
    public static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new DepartamentoDAO();
        return self::$instance;
    }
    public function getAll(){
        $sql = "SELECT * FROM t006departamento";
        $result = $this->execute($sql);
        return $result;
    }

    public function add($id,$name){
        $rs="";
        try {
            $sql = "insert into t006departamento(f006id,f006nombre) values ('".$id."','".$name."')";
            $result = $this->execute($sql);
            $rs=1;
        }catch (PDOException $exc) {
            die('Error Add() DepartamentoDAO:<br/>' . $exc->getMessage());
            $rs=0;
        }
        return $rs;
    }

    public function findById($id){
        try{
            $sql = "SELECT * FROM t006departamento WHERE f006id = '$id'";
            $result = $this->execute($sql);
        return $result;
        }catch(PDOException $exc){
            die('Error findById() DepartamentoDAO:<br/>' . $exc->getMessage());
            $rs=0;

        }

    }

    public function update($id,$name){
        $rs="";
        try {
            $sql = "update t006departamento set f006nombre ='".$name."'  where  f006id ='".$id."'";
            $result = $this->execute($sql);
            $rs=1;
        }catch (PDOException $exc) {
            die('Error update() DepartamentoDAO:<br/>' . $exc->getMessage());
            $rs=0;
        }
        return $rs;
    }

}