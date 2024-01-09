<body onLoad="javascript:window:print()" width=80% align=center>
<style>
table{
border-collapse: collapse;
}
td, th{
padding:5px;
}
</style>
<p align=center><font size=+3>Laporan Penjualan</font></p>
<hr/>
<?php
		include "../koneksi.php";
		if(empty($_GET['awal']) and empty($_GET['akhir'])){
		$sql = mysql_query("SELECT distinct produk.idproduk, namaproduk, harga, pesan_detail.idpesan, jumlah, (harga*jumlah)as subtotal FROM produk, pesan_detail where produk.idproduk=pesan_detail.idproduk");
		}else{
		$sql = mysql_query("SELECT distinct produk.idproduk, namaproduk, harga, pesan.idpesan,namalengkap, tglpesan, pesan_detail.idpesan, jumlah, (harga*jumlah)as subtotal FROM produk, pesan, pesan_detail where produk.idproduk=pesan_detail.idproduk and pesan.idpesan=pesan_detail.idpesan and tglpesan between '$_GET[awal]' and '$_GET[akhir]'");
		}
		?>
		<div class="scrol">
		<?php
		echo "<table width='80%' border='1' align=center>
			  <tr>
			  <th>ID Pemesanan</th>
				<th>Nama Produk</th>
				<th>Nama Pemesan</th>
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
					<td>$r[namaproduk]</td>
					<td>$r[namalengkap]</td>
					<td align='right'>Rp. $harga_rp,00</td>
					
					<td>$r[jumlah]</td>
					<td align='right'>Rp. $sub_rp,00</td>
				  </tr>				  
				  ";	
				  $total=$total+$r[subtotal];
				  $total_rp=format_rp($total);
		}
		echo"
		<tr>
					<td colspan=4 align=left>Terbilang : <i>".terbilang($total);echo" rupiah</i></td>
					<td>Total</td>
					<td align='right'>Rp. $total_rp,00</td>
				  </tr>
		";
		echo "</table>		";
		$tgl=date("d");
		$bln=date("F");
		$thn=date("Y");
		?>
		<table border=0 align="right" style="margin-left: 100px;">
			<tr>
				<td>Padang, <?php echo"$tgl $bln $thn"; ?></td>
				<td width=120>&nbsp;</td>
			</tr>
			<tr>
				<td height=80 valign=center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>(--------------)</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		</body>