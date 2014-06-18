<?php

// objeto que enviara todas las cadena como respuesta y extension de Response

class Cadena extends Response{

	protected $cadena;

	public function __construct($cadena)
	{
		$this->cadena = $cadena;
	}

	public function execute()
	{
		exit($this->cadena);
	}
}