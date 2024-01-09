Status Order
<style>
.select:hover{
background:#FAFAFA;
font-size:16px;
font-weight:bold;
}
</style>
<?php
	$sql = mysql_query("select * from pesan where namalengkap='$_SESSION[user1]'");
	echo "<table border='1' cellpadding=10>
		<tr>
			<th style='padding:5px;'>No Order</th>
			<th style='padding:5px;'>Nama Pemesan</th>
			<th style='padding:5px;'>Status Pesanan</th>
			<th style='padding:5px;' width=150>Tanggal Pesanan</th>
			<th style='padding:5px;' width=150>Tanggal cek admin</th>
			<th style='padding:5px;'>Detail</th>
		</tr>";
	
	while ($r = mysql_fetch_array($sql)){
		echo "<tr class='select'>
			<td style='padding:5px;'><a href='index.php?pg=13&idpesan=$r[idpesan]'>$r[idpesan]</a></td>
			<td style='padding:5px;'>$r[namalengkap]</td>
			<td style='padding:5px;'>$r[statuspesan]</td>
			<td style='padding:5px;'>$r[tglpesan]</td>
			<td style='padding:5px;'>$r[cekadmin]</td>
			<td style='padding:5px;'><a href='index.php?pg=13&idpesan=$r[idpesan]'><button>Cek</button</a></td>
		</tr>";
	}	
	echo "</table>";
?>