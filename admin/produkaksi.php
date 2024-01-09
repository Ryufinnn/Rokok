<?php
include "../koneksi.php";
$x = nl2br($_POST['deskripsi']);
$tgl = date("d");
	$bln = date("m");
	$thn = date("Y");
	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
if ($_POST['cari'] == 'cari') 
{
header("location:entry_barang.php?kd_barang=$kd_barang");
}
else if ($_POST['tambah'] == 'tambah') 
{
//if (!empty($lokasi_file)){  
		move_uploaded_file($lokasi_file,"produk/$nama_file");
		include "../koneksi.php";
		mysql_query ("INSERT INTO produk (idkategori, idbrand, namaproduk, deskripsi, harga, stok, tglmasuk, foto) VALUES ( '$_POST[idkategori]', '1', '$_POST[namaproduk]', '$x', '$_POST[harga]', '$_POST[stok]', NOW(), '$nama_file');");
	header("location:index.php?pg=50&u=$_SESSION[useradmin]");
	//}
}
else if ($_POST['ubah'] == 'ubah') 
{
mysql_query("UPDATE brand SET namabrand = '$_POST[namabrand]', ket = '$_POST[ket]' WHERE idbrand = '$_POST[idbrand]'");
header("location:index.php?pg=30&u=$_SESSION[useradmin]");
}
?>