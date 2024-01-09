<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
session_start();
	include "koneksi.php";
echo "<a href='index.php?pg=50'><button>list Produk</button></a>";
	$sql = mysql_query("select * from produk, kategori, brand where produk.idkategori=kategori.idkategori and produk.idbrand=brand.idbrand and kategori.idkategori='$_GET[idkategori]' and idproduk='$_GET[idproduk]'");
	
	echo "<table width='100%' border='0' >";
	$rpro = mysql_fetch_array($sql);
	?>
	
	<tr><td rowspan="12" width="200" valign="top"><img border="1" src="produk/<?php echo"$rpro[foto]"; ?>" width="200"></td>
		      <td><?php echo"$rpro[namaproduk]"; ?></td> </tr>
		      <td><?php echo"$rpro[namakategori]"; ?></td> </tr>
		      <td><?php echo"$rpro[namabrand]"; ?></td> </tr>
		      <td><?php echo"$rpro[deskripsi]"; ?></td> </tr>
		      <td><?php echo" harga : $rpro[harga]"; ?></td> </tr>
		      <td><?php echo"stok : $rpro[stok]"; ?></td> </tr>
			  <tr><td>&nbsp;</td>
			  </tr>
			  </table>
              </div>
              