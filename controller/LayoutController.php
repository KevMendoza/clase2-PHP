<?php

class LayoutController{

	protected $titulo;
	protected $telefono;
	protected $celular;
	protected $direccion;
	protected $email;

	public function __construct()
	{	
		
		
		
		
	}
	
	public function getTitulo()
	{
		$this->titulo='MEJORANDOLA.PHP';
		return $this->titulo;
	}
	public function getTelefono()
	{
		$this->telefono='125496';
		return $this->telefono;
	}

	public function getCelular()
	{
		$this->celular='9245879632';
		return $this->celular;
	}
	public function getDireccion()
	{
		$this->direccion='jr chorrillos num 750';
		return $this->direccion;
	}

	public function getEmail()
	{
		$this->email='mejorandoPHP@mejorandola.la';
		return $this->email;
	}
}