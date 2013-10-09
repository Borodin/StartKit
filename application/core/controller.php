<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
		$this->model = new Model();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		echo '<h2>Пустая страница</h2>';
	}
}
