<?php

//clase de home

class HomeController{
	public function indexAction()
	{
		$template='home';
		$titulo='MEJORANDOLA';
		$mensaje='Mejorando PHP';
		return new View($template,compact('titulo','mensaje'));
	}
}