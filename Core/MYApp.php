<?php

/*
 * membuat object
 */
class MYApp 
{
	protected $core = array();
	protected $controller = array();
	protected $model = array();

	protected $allclass = array();

	protected $defController = "Home";
	protected $defMethod = "index";

	/*
	 * konstruktor
	 */
	public function __construct()
	{
		define('VIEWPATH', APPPATH . "View" . DS);
		define('MODELPATH', APPPATH . "Model" . DS);
		define('CONTROLPATH', APPPATH . "Controller" . DS);

		$this->controller = glob(CONTROLPATH . "*.php");
		$this->allclass = array_merge($this->controller, $this->allclass);

		$this->model = glob(MODELPATH . "*.php");
		$this->allclass = array_merge($this->model, $this->allclass);

		$this->core = glob(COREPATH . "*.php");
		$this->allclass = array_merge($this->core, $this->allclass);

		$this->includeall();
	}

	public function start()
	{
		$this->router = new Router();

		if ( $this->router->getSegment(1) == "" )
			$kelas = $this->defController;
		else 
			$kelas = ucfirst($this->router->getSegment(1));

		if (class_exists($kelas))
			$start  = new $kelas();
		else {
			$start  = new Error404();
			$start->index();
		}

		if ( $this->router->getSegment(2) == "" )
			$meth = $this->defMethod;
		else
			$meth = $this->router->getSegment(2);

		if (method_exists($start, $meth))
			$start->$meth();
		else {
			$start = new Error404();
			$start->index();
		}
	}

	private function includeall()
	{
		foreach($this->allclass as $ctrl){
			if ( COREPATH . "MYApp.php" !=  $ctrl)
				require_once($ctrl);
		}
	}
}
