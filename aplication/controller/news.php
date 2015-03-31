<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class news extends core_controller{
    function __construct() {
        parent::__construct();
    }
    
    function viewNews(){
        $data = array();
        $content = $this->load_view('news_view', $data, true);
        $dataTemplate['content'] = $content;
        $this->load_view('template', $dataTemplate);
    }
}