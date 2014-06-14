<?php

require "config.php";
require "library/RequestUrl.php";
require "library/Request.php";
require "library/Inflector.php";
require "library/Response.php";
require "library/objectsResponse/View.php";
require "library/objectsResponse/Cadena.php";
require "library/objectsResponse/ArreglosJson.php";


if(empty($_GET['url']))
{
	$url="";
}
else
{
	$url = $_GET['url'];
}

$requestUrl= new RequestUrl($url);
$request= new Request($requestUrl);
