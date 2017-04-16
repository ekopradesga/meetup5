<?php

class Controller
{
	protected $load = null;

	function __construct()
	{
		$this->load = new Loader();
	}

	public function getinstances()
	{
		return $this;
	}
}