<?php

class ColaboradoresController{

	public function indexAction()
	{
		$template= 'colaboradores';
		$mensaje= 'contamos con un gran staff de profesionales';

		return new View($template,['mensaje'=>$mensaje]);
	}

	public function colaboradoresAction()
	{
		$colaboradores[] = array("nombre"=>"Kevin","curso"=>"php");
		$colaboradores[] = array("nombre"=>"Flavio","curso"=>"c++");
		$colaboradores[] = array("nombre"=>"Roberto","curso"=>"java");

		return new ArreglosJson($colaboradores);
	}
}