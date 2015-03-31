<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CHello extends core_controller{
    function __construct() {
        parent::__construct();
    }
    
    function action(){
        echo "hello world";
    }
    
    function bye(){
        echo "Goog bye";
    }
    
    function add_teacher(){
        $this->load_view('add_teacher_view');
    }
    
    function session_start(){
        $this->load_view('session_start_view');
    }
    
     function add_note(){
        $this->load_view('add_note_view');
    }
    
    function news(){
        $this->load_view('news_view');
    }
    
    function add_note_controller(){
        if(isset($_POST['nombre'])){
            echo "El nombre es: ". $_POST['nombre'];
        }
        echo "Nota guardada";
    }
}