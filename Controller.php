<?php
/**
* 
*/
class Controller
{
	protected $model;
	function __construct()
	{
		$this->model = new Model();
	}

	public function executar()
	{
		$dados = $this->model->getDados();
		$view = new View($dados);
	}
}
?>