<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
Status Order
<a target="_blank" href="<?php echo"cataklapcust.php?idpesan=$_GET[idpesan]"; ?>"><button>Cetak</button></a>
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
			</tr>";
		while($r2 = mysql_fetch_array($sql2)){
			$subtotal = $r2['harga'] * $r2['jumlah'];
			$total = $total + $subtotal;
			$subtotal_rp = number_format($subtotal,0,",",".");
			$total_rp = number_format($total,0,",",".");
			$harga = number_format($r2['harga'],0,",",".");	
			echo "<tr>
					<td style='padding:5px;'>$r2[namaproduk]</td>
					<td style='padding:5px;'>$r2[jumlah]</td>
					<td style='padding:5px;'>Rp. $harga,00</td>
					<td style='padding:5px;'>Rp. $subtotal_rp,00</td>
				</tr>";	
		}
		echo "<tr>
				<td colspan='3'>Total</td>
				<td style='padding:5px;'>Rp. <b>$total_rp,00</b></td>
			</tr></table><br>";
			
		
		// Tampilkan data Pembeli yang Pesan
		echo "<table border='1' cellpadding='5' cellspacing='5'>
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
			</table>";
	
?>
</td>
<td style='padding:5px;'>
&nbsp;
&nbsp;
&nbsp;
<td/>
<td style='padding:5px;'>
<form id="form1" name="form1" method="post" action="upload.php?<?php echo"u=$_SESSION[user1]";?>" enctype="multipart/form-data">
<?php
include "koneksi.php";
		$sql = mysql_query("select * from pesan where idpesan = '$_GET[idpesan]'");
		while($data = mysql_fetch_array($sql)){
?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%"><br><?php 
			if(empty($data['bukti'])){
				echo "Belum upload bukti pembayaran!!";
			}else{
				echo "<img src='upload/$data[bukti]' width='200' height='200' border='2'>";
			}
		?>
        <input name="idpesan" type="hidden" id="idpesan" value="<?php echo "$_GET[idpesan]"; ?>" />
      <input type="submit" name="button" id="button" value="Upload" /></td>
    </tr>
    <tr>
      <td style='padding:5px;'><label>
        <input type="file" name="fupload" id="fupload"/>
      </label></td>
    </tr>
  </table>
 <?php
 }
 ?>
</form>
</tr>
</table>
</div>