<?php
$tgl=date('d M Y');
$awal=$_POST['thn1']-$_POST['bln1']-$_POST['tgl1'];
$akhir=$_POST['thn2']-$_POST['bln2']-$_POST['tgl2'];
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:login.php");
	}else{
		include "../koneksi.php";
		$sql = mysql_query("select * from pesan where tglpesan between '$awal' and '$akhir'");
		echo"<body onLoad='javascript:window:print()'>";
		echo"
		<p align='center' class='style1'><b>LAPORAN DATA PESANAN</p>
<p align='center' class='style1'>-----------</b></p>
<p align='center'>-----------------</p>
<p align='center'><hr align='center' size='10' width='75%' noshade></p>
		";
		echo "<table width='70%' border='1' align='center'>
			  <tr>
    <th width='10%'>No. Order</th>
    <th width='37%'>Nama Lengkap</th>
    <th width='25%'>Tgl Pesan</th>
    <th width='25%'>Status</th>
  </tr>";
		while($r = mysql_fetch_array($sql)){
			echo " <tr>
    <td nowrap>$r[idpesan]</td>
    <td nowrap>$r[namalengkap]</td>
    <td nowrap>$r[tglpesan]</td>
    <td nowrap>$r[statuspesan]</td>
  </tr>";	
		}
		echo "</table><br><br>
		<table width='70%' border='0' align='center'>
  <tr>
    <td width='75%'>&nbsp;</td>
    <td align='center'>---------, $tgl</td>
  </tr>
  <tr>
    <td width='75%'>&nbsp;</td>
    <td align='center'>pimpinan</td>
  </tr>
  <tr height='80'>
    <td width='75%'>&nbsp;</td>
    <td align='center' valign='bottom'><em>dto,</em> </td>
  </tr>
  <tr>
    <td width='75%'>&nbsp;</td>
    <td align='center'>---------------------</td>
  </tr>
</table>
		";
		echo"</body>";
	}
	
?>