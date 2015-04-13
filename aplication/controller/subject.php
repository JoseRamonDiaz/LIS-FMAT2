<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class subject extends core_controller{
    function __construct() {
        parent::__construct();
    }
    
    function action(){
        $this->load_model("msubject");
        $subjects = $this->msubject->getSubjects();
        foreach ($subjects as $subject){
            echo "Nombre: ".$subjects['NombreMateria'];
        }
    }
    
    function insertSubject(){
        if(isset($_POST['nombre']) && isset($_POST['semestre']) && isset($_POST['creditos'])){
            $nombre = $_POST['nombre'];
            $creditos = $_POST['creditos'];
            $semestre = $_POST['semestre'];
            $obligatoria = $_POST['obligatoria'];
            $esObligatoria = "Si";
            if($obligatoria == 1)
                $esObligatoria = "Si";
            else
                $esObligatoria = "No";
            $this->load_model('msubject');
            $this->msubject->insertSubject($nombre, $creditos, $semestre, $esObligatoria);
            //Aqui debe llamar a la vista de guardado exitoso
            $this->loadSuccessView();
        }else{
           //aqui debe llamar a la vista de fallo al guardar
            $this->loadFailView();
        }
    }
    
    function insertSubjectView(){
        $data = array();
        $content = $this->load_view('add_subject_view',$data, true);
        $dataTemplate = array();
        $dataTemplate['content'] = $content;
        $this->load_view('template', $dataTemplate);
    }
    
    function loadSuccessView(){
        $data = array();
        $content = $this->load_view('success_view', $data, true);
        $dataTemplate['content'] = $content;
        $this->load_view('template', $dataTemplate);
    }
    
    function loadFailView(){
        $data = array();
        $content = $this->load_view('fail_view', $data, true);
        $dataTemplate['content'] = $content;
        $this->load_view('template', $dataTemplate);
    }
}