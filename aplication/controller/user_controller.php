<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user_controller extends core_controller{
    function __construct() {
        parent::__construct();
    }
    
    function loginView(){
            $data = array();
            $content = $this->load_view('session_start_view', $data, TRUE);
            $dataTemplate['content'] = $content;
            $this->load_view('template', $dataTemplate);
    }
    
    function login(){
        $this->load_model('muser');
        if($this->muser->login($_POST['user'], $_POST['pass']))
            $this->loadSuccessView();
        else
            $this->loadFailView ();
    }
    
    function logout(){
        $this->load_model('muser');
        if($this->muser->logout()){
            header("Location: http://localhost/LIS-FMAT2/user_controller/loginview");
        }
        else {
            $this->loadFailView();
        }
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