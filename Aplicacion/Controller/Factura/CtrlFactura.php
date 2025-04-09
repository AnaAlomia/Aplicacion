<?php

class CtrlFactura
{

    public function read()
    {
        include_once '../Controller/Cliente/CtrlCliente.php';
        include_once '../Controller/Producto/CtrlProducto.php';
        include_once '../View/Factura/factura.php';
    }

}