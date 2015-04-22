<?php 
	class header extends core_module_controller{

		function __construct(){
			parent::__construct();
		}

		function action(){
			$this->load_view('header_view');
		}

	}