<div class="container-fluid px-4">
    <h1 class="mt-4">Departamento</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Listar</li>
    </ol>
    <div class="row">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateDepto">CREAR</button>
    </div>
    <div class="row">
            <table id="dt_depto" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>DESCRIPCION</th>
                            <th>CODIGO ALTERNO</th>                                                      
                            <th>ESTADO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
    </div>
</div>
<script type="text/javascript" src="../View/Departamento/depto.js"></script>
<?php
include_once '../View/Departamento/ModalsDepartamento.php';
$objmodals=new ModalsDepartamento();
$objmodals->modalCreate();
$objmodals->modalEdit();