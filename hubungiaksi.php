<?php
	include "koneksi.php";
	mysql_query ("INSERT INTO hubungi (nama, email, subject, pesan, tanggal) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[subject]', '$_POST[pesan]', NOW());");

		header("location:index.php");
?>