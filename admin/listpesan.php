<link type="text/css" href="js/themes/base/jquery.ui.all.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="js/ui/i18n/jquery.ui.datepicker-id.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$("#tanggal").datepicker({
			dateFormat: "yy-mm-dd"
			});
		});
	
	$(document).ready(function(){
			$("#tanggal2").datepicker({
			dateFormat: "yy-mm-dd"
			});
		});
</script>

<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<form name="form1" action="index.php" method="get" enctype="multipart/form-data">
<input name="pg" type="hidden" value="90" />
	<?php 
	if(empty($_GET['awal']) and empty($_GET['akhir'])){
	?>
    <input id=tanggal name="awal" type="text" /> sampai <input id=tanggal2 name="akhir" type="text" />
    <?php
	}else{
?>
    <input id=tanggal name="awal" type="text" value="<?php echo"$_GET[awal]"; ?>" /> sampai <input id=tanggal2 name="akhir" type="text" value="<?php echo"$_GET[akhir]"; ?>" />
<?php		
		}
	?>
      <input type="submit" name="button" id="button" value="Submit"  style="padding:5px;"/> <a href="cetak.php?<?php echo"awal=$_GET[awal]&akhir=$_GET[akhir]"; ?>" target="new">Cetak</a>
</form>
<?php
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:login.php");
	}else{
		include "../koneksi.php";
		if(empty($_GET['awal']) and empty($_GET['akhir'])){
		$sql = mysql_query("SELECT distinct produk.idproduk, namaproduk, harga, pesan.idpesan, namalengkap,pesan_detail.idpesan, jumlah, (harga*jumlah)as subtotal FROM produk, pesan,pesan_detail where produk.idproduk=pesan_detail.idproduk and pesan.idpesan=pesan_detail.idpesan ");
		}else{
		$sql = mysql_query("SELECT distinct produk.idproduk, namaproduk, harga, pesan.idpesan, namalengkap, tglpesan, pesan_detail.idpesan, jumlah, (harga*jumlah)as subtotal FROM produk, pesan, pesan_detail where produk.idproduk=pesan_detail.idproduk and pesan.idpesan=pesan_detail.idpesan and tglpesan between '$_GET[awal]' and '$_GET[akhir]'");
		}
		?>
		<div class="scrol">
		<?php
		echo "<table width='90%' border='1'>
			  <tr>
			  <th>Id Pemesanan</th>
				<th>Nama Pemesan</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				
				<th>Jumlah</th>
				<th>Total Bayar</th>
				
			  </tr>";
			  function terbilang($satuan){
   $huruf = array ("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh","sebelas");
   if ($satuan < 12)
      return " ".$huruf[$satuan];
   elseif ($satuan < 20)
      return terbilang($satuan - 10)." belas";
   elseif ($satuan < 100)
      return terbilang($satuan / 10)." puluh".terbilang($satuan % 10);
   elseif ($satuan < 200)
      return "seratus".terbilang($satuan - 100);
   elseif ($satuan < 1000)
      return terbilang($satuan / 100)." ratus".terbilang($satuan % 100);
   elseif ($satuan < 2000)
      return "seribu".terbilang($satuan - 1000); 
   elseif ($satuan < 1000000)
      return terbilang($satuan / 1000)." ribu".terbilang($satuan % 1000); 
   elseif ($satuan < 1000000000)
      return terbilang($satuan / 1000000)." juta".terbilang($satuan % 1000000); 
   elseif ($satuan >= 1000000000)
      echo "Angka yang Anda masukkan terlalu besar";
}

function format_rp($angka){
		$rp = number_format($angka, 0, ',', '.');
		return $rp;	
	}
	 
		while($r = mysql_fetch_array($sql)){
			$harga_rp=format_rp($r['harga']);
	 $sub_rp=format_rp($r['subtotal']);
			echo " <tr>
			<td>$r[idpesan]</td>
			<td>$r[namalengkap]</td>
					<td>$r[namaproduk]</td>
					<td align='right'>Rp. $harga_rp,00</td>
					
					<td align='center'>$r[jumlah]</td>
					<td align='right'>Rp. $sub_rp,00</td>
				  </tr>				  
				  ";	
				  $total=$total+$r[subtotal];
				  $total_rp=format_rp($total);
		}
		echo"
		<tr>
					<td colspan=4 align=left>terbilang : <i>".terbilang($total);echo" rupiah</i></td>
					<td align='center'>Total</td>
					<td align='right'>Rp. $total_rp,00</td>
				  </tr>
		";
		echo "</table>";
		?>
		</div>
		<?php
	}
?></div>