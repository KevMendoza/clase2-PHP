<?php

//controlador que controlara la vista home

class HomeController{
	public function indexAction()
	{
		$template='home';
		$titulo='MEJORANDOLA';
		$mensaje='Mejorando PHP';
		return new View($template,compact('titulo','mensaje'));
	}
}