<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class msubject extends core_model{
    function __construct() {
        parent::__construct();
    }
    
    function getSubjects(){
        return $this->db->get('materia');
    }
    
    function insertSubject($subjectName, $credits, $semester, $isCompulsory){
        $data = array();
        $data['NombreMateria'] = $subjectName;
        $data['NumCreditos'] = $credits;
        $data['Semestre'] = $semester;
        $data['Obligatoria'] = $isCompulsory;
        $this->db->insert('materia', $data);
    }
}