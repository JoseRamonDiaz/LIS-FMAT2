<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class muser extends core_model{
    function __construct() {
        parent::__construct();
    }
    
    function login($user, $pass){
        $data = array();
        $data['NombreUsuario'] = $user;
        $data['Contrasena'] = $pass;
        
        $usuarios = $this->db->get('usuario');
        
        foreach($usuarios as $usuario){
            session_start();
            if($usuario['NombreUsuario'] == $user && $usuario['Contrsena'] == $pass){
                $_SESSION['login_username']=$user;
                return true;
            }else{
                return false;
            }
        }
    }
    
    function logout(){
        session_start();
	if(session_destroy())
	{
            return true;
            exit();
	}else{
            return false;
            exit();
        }
    }
}