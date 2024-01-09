<?php
include "../koneksi.php";
if ($_POST['cari'] == 'cari') 
{
header("location:entry_barang.php?kd_barang=$kd_barang");
}
else if ($_POST['tambah'] == 'tambah') 
{
mysql_query ("INSERT INTO kategori (namakategori, keterangan) VALUES ('$_POST[namakategori]', '$_POST[keterangan]')");
	header("location:index.php?pg=20&u=$_SESSION[useradmin]");
}
else if ($_POST['ubah'] == 'ubah') 
{
mysql_query("UPDATE kategori SET namakategori = '$_POST[namakategori]', keterangan = '$_POST[keterangan]' WHERE idkategori = '$_POST[idkategori]'");
header("location:index.php?pg=20&u=$_SESSION[useradmin]");
}
?>