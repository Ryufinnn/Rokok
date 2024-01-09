Status Order
<body onLoad="javascript:window:print()">
<style>
table{
border-collapse: collapse;
}
</style>
<table>
<tr>
<td style='padding:5px;'>
<?php 
		include "koneksi.php";
		
		/* function format_rp($angka){
			$rp = number_format($angka, 0, ',', '.');
			return $rp;	
		} */
		
		// Tampilkan Status Pesanan
		$sql = mysql_query("select * from pesan where idpesan = '$_GET[idpesan]'");
		$r = mysql_fetch_array($sql);
		
		$pilstatus = array('Baru', 'Lunas', 'Dikirim');
		$pilpesan = '';
		
		foreach($pilstatus as $status){
			$pilpesan .= "<option value=$status";
			if($status == $r['statuspesan']){
				$pilpesan .= " selected";		
			}	
			$pilpesan .= ">$status</option>\r\n";
		}
		
		echo "<form method='post' action=''>
			<input type='hidden' name=idpesan value='$r[idpesan]'>
			<table border='0'>
			<tr><td style='padding:5px;'>No. Order </td><td style='padding:5px;'> : $r[idpesan]</td></tr>
			<tr><td style='padding:5px;'>Tgl Pesan </td><td style='padding:5px;'> : $r[tglpesan]</td></tr>
			</table>
			</form>";
			
		// Tampilkan Rincian Produk yang di pesan
		$sql2 = mysql_query("select * from pesan_detail, produk where pesan_detail.idproduk=produk.idproduk and pesan_detail.idpesan='$r[idpesan]'");
		
		echo "<table border='1' cellpadding='5' cellspacing='5'>
			<tr>
				<td style='padding:5px;'>Nama Produk</td>
				<td style='padding:5px;'>Jumlah</td>
				<td style='padding:5px;'>Harga Satuan</td>
				<td style='padding:5px;'>Sub Total</td>
				<td style='padding:5px;'>Ongkir</td>
			</tr>";
		while($r2 = mysql_fetch_array($sql2)){
			$subtotal = $r2['harga'] * $r2['jumlah']+25000;
			$total = $total + $subtotal;
			$subtotal_rp = number_format($subtotal,0,",",".");
			$total_rp = number_format($total,0,",",".");
			$harga = number_format($r2['harga'],0,",",".");	
			echo "<tr>
					<td style='padding:5px;'>$r2[namaproduk]</td>
					<td style='padding:5px;'>$r2[jumlah]</td>
					<td style='padding:5px;'>Rp. $harga,00</td>
					<td style='padding:5px;'>Rp. $subtotal_rp,00</td>
					<td style='padding:5px;'>Rp. 25.000,00</td>
					
					
				</tr>";	
		}
		echo "<tr>
				<td colspan='3'>Total</td>
				<td style='padding:5px;'>Rp. <b>$total_rp,00</b></td>
			</tr></table><br>";
			
		
		// Tampilkan data Pembeli yang Pesan
	
	
?>
</td>
<td style='padding:5px;'>
&nbsp;
&nbsp;
&nbsp;
<td/>
</tr>
<tr>
<td style='padding:5px; top:500px;'>
<?php
echo"
<table border='1' cellpadding='5' cellspacing='5'>
				<tr>
					<td colspan='2'>Data Pembeli</td>
				</tr>
				<tr>
					<td style='padding:5px;'>Nama Pembeli</td>
					<td style='padding:5px;'>$r[namalengkap]</td>
				</tr>
				<tr>
					<td style='padding:5px;'>Alamat Pengiriman</td>
					<td style='padding:5px;'>$r[alamat]</td>
				</tr>
				<tr>
					<td style='padding:5px;'>No. Telp</td>
					<td style='padding:5px;'>$r[notelp]</td>
				</tr>
				<tr>
					<td style='padding:5px;'>Email</td>
					<td style='padding:5px;'>$r[email]</td>
				</tr>
			</table>
";
?>
</td>
</tr>
</table>
</body>