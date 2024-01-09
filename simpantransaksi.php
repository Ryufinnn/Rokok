<?php
	session_start();
	include "koneksi.php";
$sqlcek = mysql_query("select * from pesan_temp");
			$ketemu = mysql_num_rows($sqlcek);
			if($ketemu == 0){
				// mysql_query("insert into pesan_temp (idproduk, jumlah, idsession, tglpesantemp) values ('$_GET[idproduk]', 1, '$sid', NOW())");	
				echo"keranjang belanja anda kosong silahkan pilih barang terlebih dahulu";
			}else{
				// mysql_query("update pesan_temp set jumlah=jumlah+1, where idsession='$sid' and idproduk='$_GET[idproduk]')");	
				
	
	function format_rp($angka){
		$rp = number_format($angka, 0, ',', '.');
		return $rp;	
	}
	
	// Fungsi untuk mendapatkan isi keranjang belanja
	function isi_keranjang(){
		$isikeranjang = array();
		$sid = session_id();
		$sql = mysql_query("select * from pesan_temp where idsession = '$sid'");
		
		while($r = mysql_fetch_array($sql)){
			$isikeranjang[] = $r;	
		}	
		return $isikeranjang;
	}
	
	// Simpan data pemesanan
	mysql_query("insert into pesan (namalengkap, alamat, notelp, email, tglpesan) values ('$_POST[namalengkap]', '$_POST[alamat]', '$_POST[notelp]', '$_POST[email]', NOW())");
	
	// Mendapatkan No. Pesanan
	$idpesan = mysql_insert_id();
	
	// Panggil fungsi isi_keranjang dan hitung jml produk yang dipesan
	$isikeranjang = isi_keranjang();
	$jml = count($isikeranjang);
	
	// Simpan data detail pemesanan
	for($i=0; $i<$jml; $i++){
		mysql_query("insert into pesan_detail (idpesan, idproduk, jumlah) values ('$idpesan', {$isikeranjang[$i]['idproduk']}, {$isikeranjang[$i]['jumlah']})");	
	}
	
	// 
	for($i=0; $i<$jml; $i++){
		mysql_query("update produk set stok = stok - {$isikeranjang[$i]['jumlah']} where idproduk = {$isikeranjang[$i]['idproduk']}");	
		mysql_query("UPDATE produk SET dibeli = dibeli + {$isikeranjang[$i]['jumlah']} WHERE idproduk = {$isikeranjang[$i]['idproduk']}");
	}
	
	
	// Setelah data pemesanan tersimpan, hapus data pemesanan di tabel pemesanan sementara
	for($i=0; $i<$jml; $i++){
		mysql_query("delete from pesan_temp where idpesantemp = {$isikeranjang[$i]['idpesantemp']}");	
	}
	?>
	<body onLoad="javascript:window:print()">
<style>
table{
border-collapse: collapse;
}
</style>
	<?php
	echo "<span class=judul_head>&#187; <b>Proses Transaksi Selesai</b></span><br /><br /> 
      Data pemesan beserta ordernya adalah sebagai berikut: <br />
      <table>
      <tr><td>Nama Lengkap          </td><td> : <b>$_POST[namalengkap]</b> </td></tr>
      <tr><td>Alamat Lengkap </td><td> : $_POST[alamat] </td></tr>
      <tr><td>No. Telp         </td><td> : $_POST[notelp] </td></tr>
      <tr><td>Email         </td><td> : $_POST[email] </td></tr></table><hr /><br />
      
      Nomor Order: <b>$idpesan</b><br /><br />";
	
	echo "<table cellpadding=5 border=1>
      <tr bgcolor=#D3DCE3><th>Nama Produk</th><th>Jumlah</th><th>Harga</th><th>Sub Total</th></tr>";
	
	for($i=0; $i<$jml; $i++){
		$sql1 = mysql_query("select * from produk where idproduk = {$isikeranjang[$i]['idproduk']}");
		$r1 = mysql_fetch_array($sql1);
		$subtotal = "{$isikeranjang[$i]['jumlah']}" * $r1['harga'] ;
		$total = $total + $subtotal;
		$subtotal_rp = format_rp($subtotal);
		$total_rp = format_rp($total);
		$harga = format_rp($r1['harga']);
		echo "<tr bgcolor=#cccccc><td>$r1[namaproduk]</td><td align=center>{$isikeranjang[$i]['jumlah']}</td><td>Rp. $harga</td><td>Rp. $subtotal_rp</td></tr>
		  ";
	}
	
	echo "<tr>
			<td colspan='3' align='right'>Total &nbsp;</td>
			<td>Rp. <b>$total_rp</b></td>
		  </tr>";
	echo "</table>";
	echo "<hr /><p>Data order dan nomor rekening transfer sudah terkirim ke email Anda. <br />
              Setelah melakukan transfer segera konfirmasi agar pesanan anda dapat segera kami proses</p><br /> </body>"; 
	header("location=index.php?u=$_GET[u]");
	
	
			}
?>