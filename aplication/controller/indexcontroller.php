<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class indexcontroller extends core_controller {

    function __construct() {
        parent::__construct();
    }

    function getSubjects(){
        $data = array();
        $this->load_model('msubject');
        return $this->msubject->getSubjects();
    }
}