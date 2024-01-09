<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:index.php");
	}else{
		echo "<a href='index.php?pg=30&u=$_SESSION[useradmin]'><button>Lihat Brand</button></a> <a href='index.php?pg=10&u=$_SESSION[useradmin]'><button>Halaman Admin</button></a><br>";
		
		include "../koneksi.php";
		$sql = mysql_query("select * from brand where idbrand='$_GET[id]'");
		$data = mysql_fetch_array($sql);
		
if(empty($_GET[id])){
?>
<form id="form1" name="form1" method="post" action="brandaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama brand</td>
      <td><label>
        <input type="text" name="namabrand" id="namabrand" />
      </label></td>
    </tr>
    <tr>
      <td>ket</td>
      <td><label>
        <textarea name="ket" id="ket" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="tambah" id="tambah" value="tambah" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
}else{
?>
<form id="form1" name="form1" method="post" action="brandaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama Kategori
      <input name="idbrand" type="hidden" id="idbrand" value="<?php echo "$data[idbrand]"; ?>" /></td>
      <td><label>
        <input name="namabrand" type="text" id="namabrand" value="<?php echo "$data[namabrand]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
        <textarea name="ket" id="ket" cols="45" rows="5"><?php echo "$data[ket]"; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="ubah" id="ubah" value="ubah" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
}
}
?>
</div>