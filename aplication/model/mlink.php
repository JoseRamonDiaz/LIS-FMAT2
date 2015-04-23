<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mlink extends core_model{
    function __construct() {
        parent::__construct();
    }

    function getLinks(){
        return $this->db->get('enlaces');
    }
    
    function addLink($NombreEnlace, $Materia_idMateria){
        $data = array();
        $data['NombreEnlace'] = $NombreEnlace;
        $data['Materia_idMateria'] = $Materia_idMateria;
        
        $this->db->insert('enlaces', $data);
    }
}