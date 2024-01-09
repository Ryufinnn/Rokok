<?php
include "../koneksi.php";
if ($_POST['cari'] == 'cari') 
{
header("location:entry_barang.php?kd_barang=$kd_barang");
}
else if ($_POST['tambah'] == 'tambah') 
{
mysql_query ("INSERT INTO brand (namabrand, ket) VALUES ('$_POST[namabrand]', '$_POST[ket]')");
	header("location:index.php?pg=30&u=$_SESSION[useradmin]");
}
else if ($_POST['ubah'] == 'ubah') 
{
mysql_query("UPDATE brand SET namabrand = '$_POST[namabrand]', ket = '$_POST[ket]' WHERE idbrand = '$_POST[idbrand]'");
header("location:index.php?pg=30&u=$_SESSION[useradmin]");
}
?>