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
		$kelas = "home";
		$metode = "index";

		if (class_exists($kelas))
			$start  = new $kelas();

		if (method_exists($start, $metode))
			$start->$metode();
	}

	private function includeall()
	{
		foreach($this->allclass as $ctrl){
			if ( COREPATH . "MYApp.php" !=  $ctrl)
				require_once($ctrl);
		}
	}
}
