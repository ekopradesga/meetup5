<?php
/**
 * 
 */
class Page extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('homepage');
	}

	function about()
	{
		$this->load->view('homepage');
	}
}