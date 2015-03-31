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
    
    function insertTeacher(){
        if(isset($_POST['nombre']) && isset($_POST['apellidos'])){
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $this->load_model('mteacher');
            $this->mteacher->insertTeacher($nombre, $apellidos);
            //Aqui debe llamar a la vista de guardado exitoso
            echo "Guardao exitoso";
        }else{
           //aqui debe llamar a la vista de fallo al guardar
            echo "fallo al guardar";
        }
    }
    
    function insertTeacherView(){
        $this->load_view('add_teacher_view');
    }
}