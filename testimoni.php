<?php
	session_start();
	include "koneksi.php";
	$sql = mysql_query("select member.idmember, namalengkap, email, produk.idproduk, namaproduk, idtesti, testi, isitesti, tglpost, (member.foto) as photo from member, testimoni, produk where testimoni.idproduk=produk.idproduk and testimoni.idmember=member.idmember and produk.idproduk='$_GET[idproduk]' order by tglpost desc");
	while($r = mysql_fetch_array($sql)){
		echo "<table width='500' border='0' cellspacing='5' cellpadding='5'>
		  <tr>
			<td width='90' valign='top' align='right'>";
			if(empty($r['photo'])){
			   echo "<img src='foto/no-thumbnail.jpg' height='60' border='1'>";
			}else{
			   echo "<img src='foto/$r[photo]' height='60' border='1'>";
			}
			echo "</td>
			<td valign='top' bgcolor='#DFFFDF'><b><a href='#'>$r[namalengkap]</a></b><br>$r[testi]<br>$r[isitesti]<br><i>pada $r[tglpost] WIB</i></td>
		  </tr>
		</table>";
		include "komentar.php";	
	}	
?>