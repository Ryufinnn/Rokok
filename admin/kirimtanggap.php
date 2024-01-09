<?php
	session_start();
	include "../koneksi.php";
	$x = nl2br($_POST['isikomentar']);
	mysql_query("insert into komentar (idmember, idtesti, komentar, isikomentar, tglkomentar) values ('0', '$_POST[idtesti]', '$_POST[komentar]', '$x', NOW())");
	
	if($_GET['mod'] == "kom"){
		header("location:index.php?u=$_SESSION[user1]&pg=71&idkategori=$_GET[idkategori]&idproduk=$_GET[idproduk]");
	}else{
		header("location:index.php?u=$_SESSION[user1]&pg=71");
	}
?>