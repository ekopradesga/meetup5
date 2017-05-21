<?php 

class Loader
{
	function __construct(){}

	public function view($html, $data = array(), $notprint = false)
	{
		ob_start();
		
		if ( $html != "" )
			include(VIEWPATH . $html . ".php");

		$txt = ob_get_contents();
		@ob_end_clean();

		if ($notprint)
			return $txt;
		else
			print $txt;
	}

	public function model($models){}
	
	public function library($libs){}

	public function helper($helps){}
}
?>