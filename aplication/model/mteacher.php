<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mteacher extends core_model{
    function __construct() {
        parent::__construct();
    }
    
    function getTeachers(){
        return $this->db->get('maestro');
    }
    
    function insertTeacher(){
        $data = array();
        $data['NombreMaestro'] = "Pedro";
        $data['ApellidosMaestro'] = "Juanes";
        $this->db->insert('maestro', $data);
    }
}