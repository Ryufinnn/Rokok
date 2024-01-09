<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "elektrik";
	
	$kon = mysql_connect($host, $user, $pass);
	$kon_db = mysql_select_db($db, $kon);
	
	// CUMA UNTUK NGETESSSS
	/*if($kon){
		echo "Anda Sudah Terkoneksi dengan Database<br>";
		if($kon_db){
			echo "Terkoneksi dgn dbbookstore<br>";
		}else{
			echo "Database Anda Salah<br>";
		}
	}else{
		echo "Anda Belum Beruntung<br>";
	}*/
?>