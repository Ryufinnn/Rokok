<?php include "../koneksi.php";?>
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>

<div id='judul_kontent'>
  <h1 align="center"> 5 Stok Produk Menipis </h1>
</div>
<div align="center">
<table width='42%' border=1 align="center" id='theList'>
<tr><th width="60%" bgcolor="#FAFAFA"><div align="center">Nama Produk</div></th>
<th width="32%" bgcolor="#FAFAFA"><div align="center">Tanggal Masuk</div></th>
<th width="8%" bgcolor="#FAFAFA"><div align="center">Stok</div></th>
<th width="8%" bgcolor="#FAFAFA"><div align="center">Aksi</div></th>
</tr>
<?php
$sql = mysql_query("select * from produk order by stok asc limit 0,5");

$no=1;
while($r = mysql_fetch_array($sql)){
if($r[aktif]==1){
$status="Online";
}else{
$status="Offline";
}
?>
<tr>

<td bgcolor="#FFFFFF" class='td'><div align="center">
<?echo"$r[namaproduk]";?>
</div></td>
						<td bgcolor="#FFFFFF"><div align="center"><?echo"$r[tglmasuk]";?> </div></td>
						<td bgcolor="#FFFFFF"><div align="center"><?echo"$r[stok]";?> </div></td>
						<td>  <a href='?pg=50&act=editadmin&id=<? echo $r[idproduk];?>'><button>Edit</button></a> </td>
</tr>
<tr></tr>
<?
$no++;
}
?>
</table>
</div>
<?
if($_GET[page]=='registrasi' and $_GET[act]=='delete'){
$sql=mysql_query("delete from acount where id_acount='$_GET[id]'");
echo"<script>window.location.href='?page=registrasi'</script>";
}

?>