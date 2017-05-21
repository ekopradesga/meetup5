<?php

/**
 * 
 */
class Error404 extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		print "Error 404";
	}
}