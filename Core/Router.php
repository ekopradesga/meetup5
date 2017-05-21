<?php

/**
 * kelas pengaturan router
 */
class Router
{
	private $segments;
	
	public function __construct()
	{
		$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$pisahsegment = explode('?', $actual_link);
		$segment = explode('/', $pisahsegment[0]);

		$this->segments = $segment;
	}

	/*
	 * mengambil segment dari url menggunakan integer index array
	 * @args int $segment
	 * @return string $url
	 */
	public function getSegment($segment = 0)
	{
		return (isset($this->segments[$segment])) ? $this->segments[$segment] : false;
	}

	public function getSegementAll()
	{
		return $this->segments;
	}
}