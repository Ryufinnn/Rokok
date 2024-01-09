<style>
table{
border-collapse: collapse;
}
td, th{
padding:5px;
}
</style>
<body onLoad="javascript:window:print()">
<p align=center><font size=+3><b>Laporan Data Pesanan</b></font></p>
<hr width=80%/>
<table width="80%" border=0>
<?php
include"../koneksi.php";
$sql = mysql_query("select * from pesan ORDER BY tglpesan ASC");
		echo "<table border = 1 align=center>
			<tr>
			<th>No Order</th>
			<th>Nama member</th>
			<th>alamat</th>
			<th>no telp</th>
			<th>email</th>
			<th>status pesan</th>
			<th>tanggal pesan</th>
			<th>cekadmin</th>
			</tr>";
		while($data = mysql_fetch_array($sql)){
			echo "<tr>
				<td>$data[idpesan]</td>
				<td>$data[namalengkap]</td>
				<td>$data[alamat]</td>
				<td>$data[notelp]</td>
				<td>$data[email]</td>
				<td>$data[statuspesan]</td>
				<td>$data[tglpesan]</td>
				<td>$data[cekadmin]</td>
				</tr>";
		}
		echo "</table>";
$tgl=date("d");
$bln=date("F");
$thn=date("Y");
?>
<table width=15% align=right border=0 style="margin-right:10%;">
<tr>
	<td align="right">padang, <?php echo"$tgl $bln $thn"; ?></td>
</tr>
<tr>
	<td height=40>&nbsp;</td>
</tr>
<tr>
	<td align="right"><i>ttd</i></td>
</tr>
<tr>
	<td align="right">( ----------------- )</td>
</tr>
</table>
</body>