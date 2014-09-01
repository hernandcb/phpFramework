<?php 
	
	$confidencial = "Esta es mi variable confidencial";
	$language="PHP";
	$titulo = "MejorandoPHP";
	
	// Llamando una funcion
	view('home', compact('language', 'titulo') );
