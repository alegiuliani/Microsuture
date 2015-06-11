<?php

	function parse_ini_file_extended() {
		$p_ini = parse_ini_file('site.ini', true);
		$config = array();
		foreach($p_ini as $namespace => $properties) {
			list($name, $extends) = explode(':', $namespace);
			$name = trim($name);
			$extends = trim($extends);

			if(!isset($config[$name])) $config[$name] = array();

			if(isset($p_ini[$extends])) {
				foreach($p_ini[$extends] as $prop => $val) {
					$config[$name][$prop] = $val;
				}
			}

			foreach($properties as $prop => $val) {
				$config[$name][$prop] = $val;
			}
		}
		return $config;
	}

?>