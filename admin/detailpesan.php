<?php 
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:login.php");
	}else{
		include "../koneksi.php";
		
		function format_rp($angka){
			$rp = number_format($angka, 0, ',', '.');
			return $rp;	
		}
		
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
		
		echo "<form method='post' action='ubahstatus.php'>
			<input type='hidden' name=idpesan value='$r[idpesan]'>
			<button><a href='index.php?pg=80'>List Pesan</a></button>
			<table border='0'>
			<tr><td>No. Order </td><td> : $r[idpesan]</td></tr>
			<tr><td>Tgl Pesan </td><td> : $r[tglpesan]</td></tr>
			<tr><td>Status Pesan </td><td> : <select name='statuspesan'>$pilpesan</select><input type='submit' value='Ubah Status'></td></tr>
			</table>
			</form>";
			
		// Tampilkan Rincian Produk yang di pesan
		$sql2 = mysql_query("select * from pesan_detail, produk where pesan_detail.idproduk=produk.idproduk and pesan_detail.idpesan='$_GET[idpesan]'");
		
		echo "<table border='1' cellpadding='5' cellspacing='5'>
			<tr>
				<td>nama barang</td>
				<td>Jumlah</td>
				<td>Harga Satuan</td>
				<td>Sub Total</td>
			</tr>";
		while($r2 = mysql_fetch_array($sql2)){
			$subtotal = $r2['harga'] * $r2['jumlah'];
			$total = $total + $subtotal;
			$subtotal_rp = format_rp($subtotal);
			$total_rp = format_rp($total);
			$harga = format_rp($r2['harga']);	
			echo "<tr>
					<td>$r2[namaproduk]</td>
					<td>$r2[jumlah]</td>
					<td>Rp. $harga</td>
					<td>Rp. $subtotal_rp</td>
				</tr>";	
		}
		echo "<tr>
				<td colspan='3'>Total</td>
				<td>Rp. <b>$total_rp</b></td>
			</tr></table>";
			if(empty($r['bukti'])){
				$bukti="Belum upload bukti pembayaran!!";
			}else{
			$bukti="<img src='../upload/$r[bukti]' width='200' height='100' border='2'>";
			}
			
		
		// Tampilkan data Pembeli yang Pesan
		echo "<table border='1' cellpadding='5' cellspacing='5'>
				<tr>
					<td colspan='3'>Data Pembeli</td>
				</tr>
				<tr>
					<td>Nama Pembeli</td>
					<td>$r[namalengkap]</td>
					<td>bukti pembayaran</td>
				</tr>
				<tr>
					<td>Alamat Pengiriman</td>
					<td>$r[alamat]</td>
					<td rowspan='3' valign=top>$bukti</td>
				</tr>
				<tr>
					<td>No. Telp</td>
					<td>$r[notelp]</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>$r[email]</td>
				</tr>
			</table>";
	}
?>