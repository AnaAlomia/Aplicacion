<?php

include_once '../DAO/Departamento/DepartamentoDAO.php';

class CtrlDepartamento extends DepartamentoDAO{

    public function read(){
        include_once '../View/Departamento/listDepartamento.php';
    }
    
    public function data(){
        $listDepto=[];
        $array=[];
        $listDepto=$this->getAll();
        foreach($listDepto as $key => $rowDepto){          
           
            $array['data'][$key]['id'] = $rowDepto['f006id'];          
            $array['data'][$key]['description'] = $rowDepto['f006nombre'];      
            $array['data'][$key]['codeSecondary'] = "";        
            $array['data'][$key]['status'] = "Activo";
            $array['data'][$key]['buttons']  = '<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDepto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-edit fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDepto">
                        <li><a class="dropdown-item btnShowEdit" href="#!" data-bs-toggle="modal" data-bs-target="#modalEditDepto" data-url="'.getUrl('Departamento', 'Departamento', 'getData', array('idDepto' => $rowDepto['f006id']), 'ajax').'" role="button">Editar</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Eliminar</a></li>                                              
                    </ul>
                </li>
            </ul>';                   
           
           
        }
        /*
            json_encode($array) => se convierte el arreglo a formato JSON para la libreria data table
        */
        echo json_encode($array);
    }

    public function postNew(){
        $id=$_POST['idDepto'];
        $name=$_POST['nameDepto'];
        $rs=DepartamentoDAO::getInstance()->add($id, $name);
        if($rs == 1){
            //Mensaje de registro Exitoso
        }
        else{
           //Mensaje de error
        }
        redirect(getUrl('Departamento','Departamento','read'));
 
    }

    public function getData(){
        $id = $_GET['idDepto'];
        $array = [];
        $rs = DepartamentoDAO::getInstance()->findById($id);
        foreach($rs as $key => $rowDepto){          
           
            $array['id'] = $rowDepto['f006id'];          
            $array['description'] = $rowDepto['f006nombre'];    
 
        }        
        echo json_encode($array);
       
    }

    public function postUpdate(){
        $id=$_POST['idDeptoEdit'];
        $name=$_POST['nameDeptoEdit'];
        $rs=DepartamentoDAO::getInstance()->update($id, $name);
        if($rs == 1){
            //Mensaje de registro Exitoso
        }
        else{
           //Mensaje de error
        }
        redirect(getUrl('Departamento','Departamento','read'));
 
    }
    


}