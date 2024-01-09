<?php
$sqlproduk = mysql_query("SELECT member.username, produk.idproduk, namaproduk, deskripsi, harga, stok, (produk.foto)as photo FROM favorite, produk, member where produk.idproduk=favorite.idproduk and member.username=favorite.username and member.username='$_SESSION[user1]' order by tglfavorite desc limit 0,2");
	while($rproduk = mysql_fetch_array($sqlproduk)){
?>
<div style="margin-left:5px; margin-right:5px; margin-top:22px;"><div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html"><?php echo"$rproduk[namaproduk]"; ?></a></div>
          <div class="product_img"><a href="#"><img src="admin/produk/<?php echo"$rproduk[photo]"; ?>" alt="" border="1" width="160" height="120"/></a></div>
        </div>
  <div class="prod_details_tab">
       <div class="kiri"><?php echo"<a href='beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]'>"; ?><img src="images/cart.png" width="20" height="20" title="Beli" /></a>&nbsp;<a href="#"><img src="images/star.gif" width="20" height="20" title="favorite" /></a></div><div class="tengah"><b><?php echo"$rproduk[harga]"; ?></b></div><div class="kanan"><a href="<?php echo"index.php?u=$_SESSION[user1]&pg=15&idkategori=$rproduk[idkategori]&idproduk=$rproduk[idproduk]"; ?>" style="text-decoration:none;"><img src="images/view.gif" width="20" height="20" title="View"></a></div>
        </div>
      </div>
      </div>
<?php
	}
?>