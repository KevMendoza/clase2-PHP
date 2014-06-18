<?php

//controlador que controlara la vista contactanos

class ContactanosController{

	public function indexAction()
	{
		$template='contactanos';
		$email='mejorandophp@mejorandola.la';
		return new View($template,['email'=>$email]);
	}

	public function defaultAction()
	{
		$cadena='Bienvenidos a nuestros contactos porfavor elige una ciudad';
		return new Cadena($cadena);
	}
	public function ciudadAction($ciudad)
	{
		$cadena = 'contactandonos con '.$ciudad;
		return new Cadena($cadena);
	}

}