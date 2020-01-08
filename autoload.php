<?php
    // Now that we have an autoloader, let's register it!
    spl_autoload_register(function($class){

		$path=implode('/',explode('\\',$class));

		$file = __DIR__ . '/src/'.$class.'.class.php';

		if(file_exists($file)){
			require_once($file);
		}

	});
