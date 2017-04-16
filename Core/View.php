<?php

/**
 * 
 */
class View
{
	protected $View = null;
	
	function __construct()
	{
		$this->view = glob(ABSPATH . "App\View\*.php");
	}

	function loadall()
	{
		return $this->view;
	}
}