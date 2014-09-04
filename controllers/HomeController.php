<?php 
	
class HomeController{
	public function indexAction(){
		return new View('home', array('titulo'=>'MejorandoPHP'));
	}
}