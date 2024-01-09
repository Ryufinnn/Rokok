<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	session_start();
	if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("Anda harus loggin!!")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
	}else{
	include "koneksi.php";
	
	// function format_rp($angka){
		// $rp = number_format($angka, 0, ',', '.');
		// return $rp;	
	// }
	
	$sid = session_id();
	
	$sql = mysql_query("select * from pesan_temp, produk where idsession='$sid' and pesan_temp.idproduk=produk.idproduk");
	
	echo "
		  <table width='100%' border='1' cellspacing='5' cellpadding='5'>";
		echo "<tr>
			  <th style='padding:5px;'>No.</th>
			  <th style='padding:5px;'>Foto</th>
			  <th style='padding:5px;'>Merk</th>
			  <th style='padding:5px;'>Jumlah</th>
			  <th style='padding:5px;'>Harga Satuan</th>
			  <th style='padding:5px;'>Sub Total</th>
			  <th colspan='2'>AKSI</th>
			  </tr>";
		$no = 1;
		while($r = mysql_fetch_array($sql)){
			$subtotal = $r['harga'] * $r['jumlah'];
			$total = $total + $subtotal;
			$subtotal_rp = $subtotal;
			$total_rp = $total;
			$harga = $r['harga'];
			
		echo "
	<form action='ubah.php?u=$_GET[u]&idpesantemp=$r[idpesantemp]&idproduk=$r[idproduk]&no=$no' method='post' enctype='multipart/form-data'>
		<tr><td style='padding:5px;'>$no. <input type='hidden' name='idp[$no]' value='$r[idproduk]'/><input type='hidden' name='id[$no]' value='$r[idpesantemp]'/><input type='hidden' name='stok[$no]' value=stok='$r[stok]'/></td>
			  <td style='padding:5px;'><img src='admin/produk/$r[foto]' width='60'></td>
			  <td style='padding:5px;'>$r[namaproduk]</td>
			  <td style='padding:5px;'><input type='text' name='jml[$no]' value='$r[jumlah]' size='5'></td>
			  <td style='padding:5px;'>Rp. $harga</td>
			  <td style='padding:5px;'>Rp. $subtotal_rp</td>
			  <td style='padding:5px;'><input type='submit' value='Ubah'></td>
			  <td style='padding:5px;'><a href='beliaksi.php?u=$_GET[u]&modul=keranjang&aksi=hapus&idpesantemp=$r[idpesantemp]'>Hapus</a></td>
		</form>
			  </tr>";
			  $no++;
		}
		echo "<tr>
				
			  </tr>
			  <tr>
				<td colspan='8'><a href='index.php?u=$_GET[u]&pg=14'>Selesai Belanja</td>
			  </tr>";
		echo "</table>
		";
		}
?>
</div>