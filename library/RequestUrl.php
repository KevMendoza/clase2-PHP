<?php

//analizamos la url

class RequestUrl{

	protected $url;
	protected $controller;
	protected $defaultController='home';
	protected $action;
	protected $defaultAction = 'index';
	protected $param = array();

	public function __construct($url)
	{
		$this->url = $url;
		$segment = explode("/", $this->getUrl());
		$this->resolveController($segment);
		$this->resolveAction($segment);
		$this->param($segment);
	}

	public function resolveController(&$segment)
	{
		$this->controller = array_shift($segment);
		if(empty($this->controller))
		{
			$this->controller = $this->defaultController;
		}
	}

	public function resolveAction(&$segment)
	{
		$this->action = array_shift($segment);
		if(empty($this->action))
		{
			$this->action = $this->defaultAction;
		}
	}

	public function param(&$segment)
	{
		if(empty($segment) && $this->action != $this->defaultAction){
			$this->action='default';
		}
		else
		{
		$this->param = $segment;
		}
		
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getController()
	{
		return $this->controller;
	}

	public function getControllerClassName()
	{
		return Inflector::camel($this->getController()). 'Controller';
	}

	public function getControllerFileName()
	{
		return "controller/" . $this->getControllerClassName() . ".php";
	}

	public function getAction()
	{
		return $this->action;
	}

	public function getActionMethodName()
	{
		return Inflector::lowCamel($this->getAction()) . "Action";
	}

	public function getParam()
	{
		return $this->param;
	}
}