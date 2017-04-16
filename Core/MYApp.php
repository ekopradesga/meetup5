<?php

/*
 * membuat object
 */
class MYApp 
{
	protected $core = array();
	protected $controller = array();
	protected $model = array();
	protected $view = array();

	protected $allclass = array();

	/*
	 * konstruktor
	 */
	public function __construct()
	{
		require_once('Controller.php');
		require_once('Loader.php');

		$this->controller = glob(ABSPATH . "App\Controller\*.php");
		$this->allclass = array_merge($this->controller, $this->allclass);

		$this->model = glob(ABSPATH . "App\Model\*.php");
		$this->allclass = array_merge($this->model, $this->allclass);

		$this->view = glob(ABSPATH . "App\View\*.php");
		$this->allclass = array_merge($this->view, $this->allclass);

		$this->includeall();
	}

	public function start()
	{
		$home = new Home();
		$home->Index();
	}

	function includeall()
	{
		foreach($this->controller as $ctrl){
			if ( ABSPATH . "\App\Core\MYApp.php" !=  $ctrl)
				include_once($ctrl);
		}
	}
}