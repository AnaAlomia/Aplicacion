<?php
include_once '../Lib/Config/conexionSqli.php';
 
class ProductoDAO extends Connection {
    private static $instance = NULL;
    public static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new ProductoDAO();
        return self::$instance;
    }
    public function getAll($status=""){
        $condicion = "";
        if($status != ""){
            $condicion = " where pro_estado = '".$status."'";
        }
        $sql = "SELECT * FROM producto ".$condicion;
        $result = $this->execute($sql);
        return $result;
    }
}