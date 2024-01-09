<div id="pg">
	  <div id="TabbedPanels3" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
        <?php
$sqlbr=mysql_query("select * from brand");
while($rbr=mysql_fetch_array($sqlbr)){
?>
	      <li class="TabbedPanelsTab" tabindex="<?php echo"$rbr[idbrand]"; ?>"><?php echo"$rbr[namabrand]"; ?></li>
          <?php  } ?>
	      </ul>
	    <div class="TabbedPanelsContentGroup">
        <?php
$sqlkb=mysql_query("select * from brand");
while($rk=mysql_fetch_array($sqlkb)){
?>
  <div class="TabbedPanelsContent">  
	<?php $n=$rk[idbrand]; 
	$selectp=mysql_query("select * from produk where idbrand=$n limit 0,4");
	?>
  <?php 
  while($rowbr=mysql_fetch_array($selectp)){
					?>
                    <div class="prod_box">
        <div class="center_prod_box">
          <span class="tooltip" onmouseover="tooltip.pop(this, '<h3><u><?php echo"$rowbr[namaproduk]"; ?></u></h3><p><?php echo"$rowbr[deskripsi]"; ?></p><p><b><?php echo"Stok : $rowbr[stok]"; ?></b></p><p><b><?php echo"Harga : $rowbr[harga]"; ?></b></p>')"><div class="product_title"><a href="details.html"><?php echo"$rowbr[namaproduk]"; ?></a></div>
          <div class="product_img"><a href="#"><img src="admin/produk/<?php echo"$rowbr[foto]"; ?>" alt="" border="1" width="160" height="120"/></a></div>
        </span></div>
  <div class="prod_details_tab">
       <div class="kiri"><?php echo"<a href='beliaksi.php?u=$_SESSION[user1]&modul=keranjang&aksi=tambah&idkategori=$rowbr[idkategori]&idproduk=$rowbr[idproduk]'>"; ?><img src="images/cart.png" width="20" height="20" title="Beli" /></a>&nbsp;<a href="#"><img src="images/star.gif" width="20" height="20" title="favorite" /></a></div><div class="tengah"><b><?php echo"$rowbr[harga]"; ?></b></div><div class="kanan"><a href="<?php echo"index.php?u=$_SESSION[user1]&pg=15&idkategori=$rowbr[idkategori]&idproduk=$rowbr[idproduk]"; ?>" style="text-decoration:none;"><img src="images/view.gif" width="20" height="20" title="View"></a></div>
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