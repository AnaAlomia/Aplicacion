<?php
include_once '../DAO/Producto/ProductoDAO.php';
class CtrlProducto extends ProductoDAO{
 
    public function getOption(){
        $listProducto=ProductoDAO::getInstance()->getAll();
        foreach($listProducto as $key => $row){    
            echo '<option value="'.$row['pro_id'].'">'.$row['pro_nombre'].'</option>';
        }
    }
 
}