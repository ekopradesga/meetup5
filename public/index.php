<?php 
/*
 * constant atau konstanta ini adalah static variable ga bisa rubah
 * constant untuk mendifinisikan file project 
 */
define('ABSPATH', str_replace("public", '', $_SERVER['DOCUMENT_ROOT']) );

/*
 * memasukan file Core\MYApp.php kedalam file ini
 * require, require_once, include, include_once
 */
require_once(ABSPATH . "Core/MYApp.php");

/*
 * ini untuk mengaktifkan object di konsep oop
 */
$myapp = new MYApp();
/*
 * ini untuk memanggil method dari sebuah object pada konsep oop
 */
$myapp->start();
?>