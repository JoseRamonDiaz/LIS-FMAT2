<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class teacher extends core_controller{
    function __construct() {
        parent::__construct();
    }
    
    function action(){
        $this->load_model("mteacher");
        $teachers = $this->mteacher->getTeachers();
        foreach ($teachers as $teacher){
            echo "Nombre: ".$teacher['NombreMaestro'];
        }
    }
    
    
}