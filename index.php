<?php

//llamamos a todo los archivos requerido

require "config.php";
require "library/RequestUrl.php";
require "library/Request.php";
require "library/Inflector.php";
require "library/Response.php";
require "library/objectsResponse/View.php";
require "library/objectsResponse/Cadena.php";
require "library/objectsResponse/ArreglosJson.php";


//obtenemos la url

if(empty($_GET['url']))
{
	$url="";
}
else
{
	$url = $_GET['url'];
}

//enviamos la url para el analisis
$requestUrl= new RequestUrl($url);

//enviamos la url para la busqueda y apertura de la vista
$request= new Request($requestUrl);
