<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	include "koneksi.php";
	$sql = mysql_query("select * from produk, kategori where produk.idkategori=kategori.idkategori and kategori.idkategori='$_GET[idkategori]' and idproduk='$_GET[idproduk]'");
	
	//--------------------------------------------
	mysql_query("UPDATE produk SET dilihat = dilihat+1 WHERE idproduk = $_GET[idproduk]");
	//---------------------------------------------
	
	echo "<table width='100%' border='0' >";
	$rpro = mysql_fetch_array($sql);
	?>
	
	<tr><td rowspan="12" width="200" valign="top"><img border="1" src="admin/produk/<?php echo"$rpro[foto]"; ?>" width="200"></td>
		      <td><b>Nama Produk</b></td><td>: <?php echo"$rpro[namaproduk]"; ?></td> </tr>
		      <td><b>Kategori Produk</b></td><td>: <?php echo"$rpro[namakategori]"; ?></td> </tr>
		     
		      <td> <b>Keterangan</b></td><td>: <?php echo"$rpro[deskripsi]"; ?></td> </tr>
		      <td> <b>Harga</b></td><td>: <?php echo"$rpro[harga]"; ?></td> </tr>
		      <td><b>Stok Produk</b></td><td>: <?php echo"$rpro[stok]"; ?></td> </tr>
			  
			  <tr><td><a href="<?php echo"beliaksi.php?u=$_GET[u]&modul=keranjang&aksi=tambah&idproduk=$rpro[idproduk]"; ?>"><img src="images/cart.png" title="BELI" width="20" height="20"/></a></td>
			  </tr>
			  </table>
              </div>
              <div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
              <div class="bar">
    	<p>Testimoni</p>
    </div>
    <?php 
	if(!empty($_SESSION['user1'])){
	?>
              <div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;"><?php include"posttestimoni.php"; ?>
			  <?php 
			  include"recentaksi.php";
			  }else{
			  echo"<p>anda harus login untuk memberikan masukan!</p>"; 
			  } 
			  ?>
			  </div><div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
			  <?php include"testimoni.php"; ?>
			  </div>
			  </div>