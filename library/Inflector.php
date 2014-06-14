<?php

class Inflector{

	public static function camel($value)
	{
		$Segment = explode('-', $value);

		array_walk($Segment, function(&$item){
			$item = ucfirst($item);
		});

		return implode("", $Segment);
	}

	public static function lowCamel($value)
	{
		return lcfirst(Inflector::camel($value));
	}
}