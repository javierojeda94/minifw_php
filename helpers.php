<?php

	function view($template, $vars = array()){
		extract($vars);
		require "views/$template.tpl.php";
	}

	function controller($name){
		if(empty($name)){
			$name = 'home';
		}
		$file = "controllers/$name.php";
		if(file_exists($file)){
			require $file;			
		}
		else{
			require "controllers/404.php";
		}
	}