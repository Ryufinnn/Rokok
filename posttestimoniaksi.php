<?php
	session_start();
	include "koneksi.php";
	
	$x = nl2br($_POST['isitesti']);
	mysql_query("insert into testimoni (idmember, idproduk, testi, isitesti, tglpost) values ('$_POST[idmember]','$_POST[idproduk]', '$_POST[testi]', '$x', NOW())");
	
	if($_GET['mod'] == "stat"){
		header("location:index.php?u=$_SESSION[user1]&pg=15&idkategori=$_POST[idkategori]&idproduk=$_POST[idproduk]");
	}else{
		header("location:index.php?u=$_SESSION[user1]");
	}
?>