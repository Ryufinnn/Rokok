<?php
	include "koneksi.php";
	
	$tanggal = $_POST[tgl];
	$bulan = $_POST[bln];
	$tahun = $_POST[thn];
	
	mysql_query ("INSERT INTO member (username, password, namalengkap, tempatlahir, tgllahir, jk, alamat, notelp, email, tgldaftar) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[namalengkap]', '$_POST[tempatlahir]', '$tahun-$bulan-$tanggal', '$_POST[jk]', '$_POST[alamat]', '$_POST[notelp]', '$_POST[email]', NOW())");

		header("location:index.php");
?>