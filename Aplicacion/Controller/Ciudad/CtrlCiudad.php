<?php

include_once '../DAO/Ciudad/CiudadDAO.php';

class CtrlCiudad extends CiudadDAO{

    public function read(){
        include_once '../View/Ciudad/listCiudad.php';
    }
    
    public function data(){
        $listDepto=[];
        $array=[];
        $listDepto=$this->getAll();
       

        foreach($listDepto as $key => $rowDepto){          
           
            $array['data'][$key]['id'] = $rowDepto['f005id'];          
            $array['data'][$key]['nombre'] = $rowDepto['f005nombre'];      
            $array['data'][$key]['departamento'] = $rowDepto['f006idDepto'];        
            $array['data'][$key]['habitantes'] = $rowDepto['f006habitantes'];
                            
           
           
        }
        /*
            json_encode($array) => se convierte el arreglo a formato JSON para la libreria data table
        */
        echo json_encode($array);
    }

    public function postNew(){
        $id=$_POST['idCiudad'];
        $name=$_POST['nameCiudad'];
        $depar=$_POST['nameDepar'];
        $rs=CiudadDAO::getInstance()->add($id, $name, $depar);
        if($rs == 1){
            //Mensaje de registro Exitoso
        }
        else{
        //Mensaje de error
        }
        redirect(getUrl('Ciudad','Ciudad','read'));

    }
}