<?php
	include "koneksi.php";
	mysql_query("UPDATE member SET namalengkap = '$_POST[namalengkap]', tempatlahir = '$_POST[tempatlahir]', tgllahir = '$_POST[thn]-$_POST[bln]-$_POST[tgl]', jk = '$_POST[jk]', alamat = '$_POST[alamat]', notelp = '$_POST[notelp]',email = '$_POST[email]' WHERE username = '$_POST[username]'");
	header("location:index.php?u=$_POST[username]");
?>