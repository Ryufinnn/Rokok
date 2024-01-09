<?php
	session_start();
	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
	if (!empty($lokasi_file)){  
		move_uploaded_file($lokasi_file,"foto/$nama_file");
		include "koneksi.php";
		mysql_query("update member set foto = '$nama_file' where username = '$_POST[username]'");
		header("location:index.php?u=$_SESSION[user1]");
	}
?>