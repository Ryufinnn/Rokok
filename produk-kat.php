<div id="pg">
	  <div id="TabbedPanels2" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
        <?php
$sqlkk=mysql_query("select * from kategori limit 0,12");
while($rkk=mysql_fetch_array($sqlkk)){
?>
	      <li class="TabbedPanelsTab" tabindex="<?php echo"$rkk[idkategori]"; ?>"><?php echo"$rkk[namakategori]"; ?></li>
          <?php  } ?>
	      </ul>
	    <div class="TabbedPanelsContentGroup">
        <?php
$sqlk=mysql_query("select * from kategori");
while($rk=mysql_fetch_array($sqlk)){
?>
  <div class="TabbedPanelsContent">  
	<?php $n=$rk[idkategori]; 
	$selectbok=mysql_query("select * from produk where idkategori=$n limit 0,12");
	?>
  <?php 
  while($rowb=mysql_fetch_array($selectbok)){
					?>
                    <div class="prod_box">
        <div class="center_prod_box">
          <span class="tooltip" onmouseover="tooltip.pop(this, '<h3><u><?php echo"$rowb[namaproduk]"; ?></u></h3><p><?php echo"$rowb[deskripsi]"; ?></p><p><b><?php echo"Stok : $rowb[stok]"; ?></b></p><p><b><?php echo"Harga : $rowb[harga]"; ?></b></p>')"><div class="product_title"><a href="details.html"><?php echo"$rowb[namaproduk]"; ?></a></div>
          <div class="product_img"><a href="#"><img src="admin/produk/<?php echo"$rowb[foto]"; ?>" alt="" border="1" width="160" height="120"/></a></div>
        </span></div>
  <div class="prod_details_tab">
      <div class="kiri"><?php echo"<a href='beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rowb[idkategori]&idproduk=$rowb[idproduk]'>"; ?><img src="images/cart.png" width="20" height="20" title="Beli" /></a>&nbsp;<a href="#"><img src="images/star.gif" width="20" height="20" title="favorite" /></a></div><div class="tengah"><b><?php echo"$rowb[harga]"; ?></b></div><div class="kanan"><a href="<?php echo"index.php?u=$_SESSION[user1]&pg=15&idkategori=$rowb[idkategori]&idproduk=$rowb[idproduk]"; ?>" style="text-decoration:none;"><img src="images/view.gif" width="20" height="20" title="View"></a></div>
        </div>
      </div>
					<?php
			} ?></div>
<?php
}
?>
	      </div>
	    </div>
    </div>