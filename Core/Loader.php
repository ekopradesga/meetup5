<?php 

class Loader
{
	function __construct(){}

	public function view($html, $notprint = false)
	{
		if ( $html != "" )
			$txt = file_get_contents(ABSPATH . "App/View/" . $html . ".php");
		if ( $notprint )
			return $txt;
		else
			print $txt;
	}

	public function model($classes){}
	public function Libraries(){}
}
?>