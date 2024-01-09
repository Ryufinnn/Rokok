<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:login.php");
	}else{
		include "../koneksi.php";
		$sqlkat = mysql_query("select * from kategori order by namakategori");
		$sqlbrand = mysql_query("select * from brand order by namabrand");
		$sqlpro = mysql_query("select * from produk where idproduk='$_GET[id]'");
		$rpro = mysql_fetch_array($sqlpro);
		echo "<a href='index.php?pg=50&u=$_SESSION[useradmin]'><button>Lihat Produk</button></a> <a href='index.php?pg=10&u=$_SESSION[useradmin]'><button>Halaman Admin</button></a><br>";
		
if(empty($_GET[id])){
?>
<form id="form1" name="form1" method="post" action="produkaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama Kategori</td>
      <td><select name="idkategori" id="idkategori">
        <option value="0">Pilih Kategori</option>
        <?php
				while($rkat = mysql_fetch_array($sqlkat)){
					echo "<option value='$rkat[idkategori]'>$rkat[namakategori]</option>";
				}
           ?>
      </select></td>
    </tr>
    
    <tr>
      <td>Nama Produk</td>
      <td><label>
        <input type="text" name="namaproduk" id="namaproduk" />
      </label></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td><label>
        <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label>
        Rp. 
        <input type="text" name="harga" id="harga" />
      </label></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><label>
        <input name="stok" type="text" id="stok" size="10" />
      buah</label></td>
    </tr>
    <tr>
      <td>Foto</td>
      <td><label>
        <input type="file" name="fupload" id="fupload" />
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
<form id="form1" name="form1" method="post" action="produkaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama Kategori
      <input name="idproduk" type="hidden" id="idproduk" value="<?php echo "$rpro[idproduk]"; ?>" /></td>
      <td><select name="idkategori" id="select2">
        <option value="0">Pilih Kategori</option>
        <?php
				while($rkat = mysql_fetch_array($sqlkat)){
					if($rkat['idkategori'] == $rpro['idkategori']){
						echo "<option value='$rkat[idkategori]' selected>$rkat[namakategori]</option>";
					}else{
						echo "<option value='$rkat[idkategori]'>$rkat[namakategori]</option>";						
					}
				}
           ?>
      </select></td>
    </tr>
   
    <tr>
      <td>Nama Produk      </td>
      <td><label>
        <input name="namaproduk" type="text" id="namaproduk" value="<?php echo "$rpro[namaproduk]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td><label>
        <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"><?php echo "$rpro[deskripsi]"; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label>
        Rp. 
        <input name="harga" type="text" id="harga" value="<?php echo "$rpro[harga]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><label>
        <input name="stok" type="text" id="stok" value="<?php echo "$rpro[stok]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Foto Lama</td>
      <td><label><?php echo "<img src='produk/$rpro[foto]' height='300'>"; ?></label></td>
    </tr>
    <tr>
      <td> Foto Baru</td>
      <td><label>
        <input type="file" name="fupload" id="fupload" />
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