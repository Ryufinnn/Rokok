<?php
	include "../koneksi.php";
	mysql_query("UPDATE pesan SET statuspesan = '$_POST[statuspesan]', cekadmin = NOW() where idpesan='$_POST[idpesan]'");
	header("location:index.php?pg=80");
?>