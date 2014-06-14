<?php

class Request{

	protected $controllerClassName;
	protected $controllerFileName;
	protected $actionMethodName;
	protected $param=array();
	
	public function __construct($requestUrl)
	{
		$this->controllerClassName = $requestUrl->getControllerClassName();
		$this->controllerFileName  = $requestUrl->getControllerFileName();
		$this->actionMethodName    = $requestUrl->getActionMethodName();
		$this->param               = $requestUrl->getParam();
		$this->execute();
	}
	
	public function execute()
	{
		
		if( file_exists($this->controllerFileName))
		{
			require $this->controllerFileName;
			$controller = new $this->controllerClassName();
			$response = call_user_func_array([$controller, $this->actionMethodName], $this->param);
			$this->getResponseExecute($response);
		}
		else
		{
			header('HTTP/1.0 404 NotFound');
			exit('lo sentimos mucho esta pagina no pudo ser  hallada');
		}

	}	
	public function getResponseExecute($response)
	{
		if($response instanceof Response)
		{
			$response->execute();
		}
		else
		{
			exit('error por envio de dato');
		}
	}

}