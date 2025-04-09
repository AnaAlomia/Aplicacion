<div class="container-fluid px-4">
    <h1 class="mt-4">Ciudad</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Listar</li>
    </ol>
    <div class="row">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateDepto">CREAR</button>
    <div class="row">
            <table id="dt_ciudad" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>NOMBRE</th>
                            <th>DEPARTAMENTO</th>                                                      
                            <th>HABITANTES</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
    </div>
</div>
<script type="text/javascript" src="../View/Ciudad/ciudad.js"></script>
<?php
include_once '../View/Ciudad/ModalsCiudad.php';
$objmodals=new ModalsCiudad();
$objmodals->modalCreate();