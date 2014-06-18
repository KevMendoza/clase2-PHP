<?php

//pequeña clase de utileria para dar formatos

class Inflector{

	//funcion que inicializa cada palabra con mayuscula, indicara el nombre del controlador

	public static function camel($value)
	{
		$Segment = explode('-', $value);

		array_walk($Segment, function(&$item){
			$item = ucfirst($item);
		});

		return implode("", $Segment);
	}

	//funcion que inicializa la primera palabra con minuscula, indicara el nombre de la actividad

	public static function lowCamel($value)
	{
		return lcfirst(Inflector::camel($value));
	}
}