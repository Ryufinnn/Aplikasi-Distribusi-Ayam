<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "db_ayam";
	
	$tgl_skr=date('Y-m-d');
	if($tgl_skr>="2019-05-10"){
	echo"<div class='container-fluid'><h5 style='color:red;' align='center'>Aplikasi Sudah Expired Silakan diperbaharui ...!</h5></div>";
	$host = "localhost";
	$user = "user";
	$pass = "";
	$db   = "";
	
	$kon = mysql_connect($host,$user,db);
	$kondb = mysql_select_db($pass, $kon);
	}
	
	$kon = mysql_connect($host,$user,$pass);
	$kondb = mysql_select_db($db, $kon);
	// Cuma buat ngetes doank
	/*if($kon){
		echo "Terkoneksi dgn MySQL Server ";
		if($kondb){
		   echo "Database $db bisa diakses";
		}else{
		   echo "Database $db tidak ada";
		}
	}else{
		echo "Gagal Koneksi ";
	}*/
?>