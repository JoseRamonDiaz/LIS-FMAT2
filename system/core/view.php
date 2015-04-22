<?php 
class view {

	function load($view, $data, $async){
		if (is_array($data)){
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		$config = config::getInstance();
		$database = $config->getBaseConfig();
		$appBase = $database['base_url'];

		if ($async) {
			ob_start();
			include('aplication/view/'.$view.'.php');
			$buffer = ob_get_contents();
			@ob_end_clean();
			return $buffer;
		} else {
			include('aplication/view/'.$view.'.php');
		}
	}

	function load_module($view, $data, $async){
		if (is_array($data)){
			foreach ($data as $key => $value) {
				$$key = $value;
			}
		}

		$config = config::getInstance();
		$database = $config->getBaseConfig();
		$appBase = $database['base_url'];

		if ($async) {
			ob_start();
			include('aplication/modules/view/'.$view.'.php');
			$buffer = ob_get_contents();
			@ob_end_clean();
			return $buffer;
		} else {
			include('aplication/modules/view/'.$view.'.php');
		}
	}

}