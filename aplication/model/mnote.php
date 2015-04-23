<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mnote extends core_model{
    function __construct() {
        parent::__construct();
    }

    function getNotes(){
        return $this->db->get('apuntes');
    }
    
    function addNote($NombreApuntes, $ArchivoApuntes, $DescripcionApuntes, $Tipo, $idMaestro, $idMateria){
        $data = array();
        $data['NombreApuntes'] = $NombreApuntes;
        $data['ArchivoApuntes'] = $ArchivoApuntes;
        $data['DescripcionApuntes'] = $DescripcionApuntes;
        $data['Tipo'] = $Tipo;
        $data['idMaestro'] = $idMaestro;
        $data['idMateria'] = $idMateria;
        
        $this->db->insert('apuntes', $data);
    }
}