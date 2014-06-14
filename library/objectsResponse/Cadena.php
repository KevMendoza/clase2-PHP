<?php

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