<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:index.php");
	}else{
		
		
		include "../koneksi.php";
		$sql = mysql_query("select * from kategori where idkategori='$_GET[id]'");
		$data = mysql_fetch_array($sql);
		
if(empty($_GET[id])){
?>
<form id="form1" name="form1" method="post" action="kategoriaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Kode Barang </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Nama Barang </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Satuan </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Stock Akhir </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Kebutuhan/Tahun </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Biaya Simpan </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Biaya Pesan </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Jumlah Pemesanan yang Ekonomis </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
	<tr>
      <td>Waktu Interval Pemesanan yang Ekonomis </td>
      <td><label>
        <input type="text" name="namakategori" id="namakategori" />
      </label></td>
    </tr>
    
    <tr>
      <td><label>
        <input type="submit" name="tambah" id="tambah" value="Proses" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
}else{
?>
<form id="form1" name="form1" method="post" action="kategoriaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama Kategori
      <input name="idkategori" type="hidden" id="idkategori" value="<?php echo "$data[idkategori]"; ?>" /></td>
      <td><label>
        <input name="namakategori" type="text" id="namakategori" value="<?php echo "$data[namakategori]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
        <textarea name="keterangan" id="keterangan" cols="45" rows="5"><?php echo "$data[keterangan]"; ?></textarea>
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