<?php 
	class Module {

		public static function run($moduleControllerName){
			$controller = new $moduleControllerName();
			$controller->action();
		}

	}