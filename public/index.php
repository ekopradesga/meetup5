<?php 
/*
 * constant atau konstanta ini adalah static variable ga bisa rubah
 * constant untuk mendifinisikan file project 
 */
define('DS', DIRECTORY_SEPARATOR);
define('ABSPATH', str_replace("public", '', $_SERVER['DOCUMENT_ROOT']) );
define('APPPATH', ABSPATH . "App" . DS);
define('COREPATH', ABSPATH . "Core" . DS);

/*
 * memasukan file Core\MYApp.php kedalam file ini
 * require, require_once, include, include_once
 */
require_once(COREPATH . "MYApp.php");

/*
 * ini untuk mengaktifkan object di konsep oop
 */
$myapp = new MYApp();

/*
 * ini untuk memanggil method dari sebuah object pada konsep oop
 */
$myapp->start();

?>