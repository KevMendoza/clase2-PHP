<?php

class View extends Response{

	protected $template;
	protected $var = array();
	protected $plantilla;
		
	public function __construct($template, $var=array())
	{
		$this->template = $template;
		$this->var = $var;
		$this->plantilla = 'layout';
	}


	public function getTemplate()
	{
		$this->template;
	}

	public function getVar()
	{
		$this->var;
	}

	public function getTemplateFileName()
	{

		return 'view/'.$this->template.'.tpl.php';
	}

	public function execute()
	{
		
		$template= $this->template;
		$var = $this->var;

		call_user_func(function() use ($template,$var){
			extract($var);
			ob_start();
			require $this->getTemplateFileName();
			$this->getVarlayout();
			
		});
	}
	public function getVarLayout()
	{
		$tpl_content= ob_get_clean();
		require "controller/LayoutController.php";
		$layout = new LayoutController();
		$tituloLayout    = $layout->getTitulo();
		$telefonoLayout  = $layout->getTelefono();
		$celularLayout   = $layout->getCelular();
		$direccionLayout = $layout->getDireccion();
		$emailLayout     = $layout->getEmail();		
		require 'view/'.$this->plantilla.'.tpl.php';
		
	}
}