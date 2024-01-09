<?php
$sqlproduk = mysql_query("SELECT * FROM produk order by tglmasuk desc limit 0,8");
	while($rproduk = mysql_fetch_array($sqlproduk)){
?>
<div class="prod_box">
        <div class="center_prod_box">
          <span class="tooltip" onmouseover="tooltip.pop(this, '<h1><u><?php echo"$rproduk[namaproduk]"; ?></u></h1><br/><p><?php echo"$rproduk[deskripsi]"; ?></p><p><b><?php echo"Stok : $rproduk[stok]"; ?></b></p><p><b><?php echo"Harga : $rproduk[harga]"; ?></b></p>')"><div class="product_title"><a href="<?php echo"beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]"; ?>"><?php echo"$rproduk[namaproduk]"; ?></a></div>
          <div class="product_img"><a href="<?php echo"beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]"; ?>"><img src="admin/produk/<?php echo"$rproduk[foto]"; ?>" alt="" border="1" width="160" height="120"/></a></div>
        </span></div>
  <div class="prod_details_tab">
       <div class="kiri"><?php echo"<a href='beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]'>"; ?><img src="images/cart.png" width="20" height="20" title="Beli" /></a>&nbsp;<a href="favoriteaksi.php?<?php echo"idproduk=$rproduk[idproduk]&username=$_SESSION[user1]"; ?>"><img src="images/star.gif" width="20" height="20" title="favorite" /></a></div><div class="tengah"><b><?php echo"$rproduk[harga]"; ?></b></div><div class="kanan"><a href="<?php echo"index.php?u=$_SESSION[user1]&pg=15&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]"; ?>" style="text-decoration:none;"><img src="images/view.gif" width="20" height="20" title="View"></a></div>
        </div>
      </div>
<?php
	}
?>