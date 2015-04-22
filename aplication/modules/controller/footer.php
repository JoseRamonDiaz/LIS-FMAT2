<?php 
	class footer extends core_module_controller{

		function __construct(){
			parent::__construct();
		}

		function action(){
			$this->load_view('footer_view');
		}

	}