<div class="container-fluid px-4">
    <h1 class="mt-4">FACTURA DE VENTA</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Crear</li>
    </ol>
   
   
    <div class="row">
        <form id="frmfactura" method="POST" action="<?php echo getUrl('Factura','Factura','postNew')?>">
            <div class="row">
                <div class="col-lg-2">
                    <label>No factura</label>
                    <input type="text" name="nofact" id="nofact" class="form-control" readonly>
                </div>
                <div class="col-lg-2">
                    <label>Fecha factura</label>
                    <input type="date" name="datefact" id="datefact" class="form-control" required>
                </div>
                <div class="col-lg-2">
                    <label>Cliente</label>
                    <select name="cliente" id="cliente" class="form-control" required>
                        <option value="0">Seleccione !!!!</option>
                                <?php
                                    $objCliente = new CtrlCliente();
                                    $objCliente->getOption();
                                ?>
                    </select>
                </div>
                <div class="col-lg-2">
                    <label>Producto</label>
                    <select name="producto" id="producto" class="form-control" required>
                        <option value="0">Seleccione !!!!</option>
                                <?php
                                    $objProducto = new CtrlProducto();
                                    $objProducto->getOption();
                                ?>
                    </select>
                </div>
            </div>
 
            <div class="row">                
                <div class="col-lg-10">
                    <label>Observaciones</label>
                    <input type="text" name="observaciones" id="observaciones" class="form-control">
                </div>
            </div>        
 
            <table id="dt_factura" class="table table-bordered table-hover">
                <thead>
                    <tr>                    
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>                                                      
                        <th>CANTIDAD</th>
                        <th>SUBTOTAL</th>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <select name="listProducto[]" id="" class="form-control">
                                <option>Seleccione !!!!</option>
                            </select>
                        </th>
                        <th>
                            <input id="" name="listPrecio[]" type="number" class="form-control">
                        </th>
                        <th>
                            <input id="" name="listCantidad[]" type="number" class="form-control">
                        </th>
                        <th>
                            <input id="" name="listSubtotal[]" type="number" class="form-control" readonly>
                        </th>
                    </tr>
                </tbody>
            </table>
        </form>
           
    </div>
</div>
<script type="text/javascript" src="../View/Factura/factura.js"></script>