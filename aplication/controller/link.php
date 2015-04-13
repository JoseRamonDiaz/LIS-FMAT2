<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class link extends core_controller {

    function __construct() {
        parent::__construct();
    }

    function addLink(){
        if(isset($_POST['enlace'])){
            $enlace = $_POST['enlace'];
            $Materia_idMateria = $_POST["Materia_idMateria"];
            $this->load_model('mlink');
            $this->mlink->addLink($enlace, $Materia_idMateria);
            //Aqui debe llamar a la vista de guardado exitoso
            $this->loadSuccessView();
        }else{
           //aqui debe llamar a la vista de fallo al guardar
            $this->loadFailView();
        }
    }

    function addLinkView(){
        $data = array();
        $content = $this->load_view('add_link_view', $data, true);
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