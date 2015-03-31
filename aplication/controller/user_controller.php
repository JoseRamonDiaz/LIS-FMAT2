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
}