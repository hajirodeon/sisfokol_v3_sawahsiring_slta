<?php
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
/////// SISFOKOL_SLTA_v3.0_(sawah_siring)_FREE           ///////
/////// (Sistem Informasi Sekolah untuk SLTA)            ///////
////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                    ///////
/////// Agus Muhajir, S.Kom                              ///////
/////// URL 	: http://sisfokol.wordpress.com          ///////
/////// E-Mail	:                                        ///////
///////		* hajirodeon@yahoo.com                   ///////
///////		* hajirodeon@gmail.com                   ///////
/////// HP/SMS	: 081-829-88-54                          ///////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////



require("inc/fungsi.php");

nocache;




//install...?
$fp = @fopen("install/index.php","r");

if ($fp)
	{
	//re-direct, instalasi
	$ke = "install/index.php";
	xloc($ke);
	exit();
	}
else
	{
	//re-direct
	$ke = "login.php";
	xloc($ke);
	exit();
	}
?>