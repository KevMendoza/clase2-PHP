<?php

class ArreglosJson extends Response{

	protected $cadena = array();

	public function __construct($cadena)
	{

		$this->cadena = $cadena;
	}

	public function execute()
	{
		exit( json_encode($this->cadena));
	}
}